<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
use App\Events\NewMessage;

class ContactsController extends Controller
{
    public function get()
    {
        // get all users except the authenticated one
      /*  $contacts = User::where('users.id', '!=', auth()->id())
        ->join('messages', 'users.id', '=', 'messages.from')
        ->where('messages.from' ,'=', auth()->id())
        ->get();*/
        $a = \DB::table('users as u')
        ->select('u.id','u.name','u.email','u.password','u.admin','u.remember_token', 'u.created_at', 'u.updated_at')
        ->join('messages','messages.from' ,'=', 'u.id')
        ->where('u.id', '!=', auth()->id())
        ->where('messages.to','=', auth()->id());

        $b = \DB::table('users as u')
        ->select('u.id','u.name','u.email','u.password','u.admin','u.remember_token', 'u.created_at', 'u.updated_at')
        ->join('messages','messages.to' ,'=', 'u.id')
        ->where('u.id', '!=', auth()->id())
        ->where('messages.from','=', auth()->id());

        $contacts = $a->union($b)->get();

        // get a collection of items where sender_id is the user who sent us a message
        // and messages_count is the number of unread messages we have from him
        $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', auth()->id())
            ->where('read', false)
            ->groupBy('from')
            ->get();

        // add an unread key to each contact with the count of unread messages
          $contacts = $contacts->map(function($contact) use ($unreadIds) {
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

            return $contact;
        });


        return response()->json($contacts);
    }

    public function getMessagesFor($id)
    {
        // mark all messages with the selected contact as read
        Message::where('from', $id)->where('to', auth()->id())->update(['read' => true]);

        // get all messages between the authenticated user and the selected user
        $messages = Message::where(function($q) use ($id) {
            $q->where('from', auth()->id());
            $q->where('to', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('from', $id);
            $q->where('to', auth()->id());
        })
        ->get();

        return response()->json($messages);
    }

    public function send(Request $request)
    {
        $message = Message::create([
            'from' => auth()->id(),
            'to' => $request->contact_id,
            'text' => $request->text
        ]);

        broadcast(new NewMessage($message));

        return response()->json($message);
    }

    
    public function sendFirst(Request $request, $iduser)
    {
        $message = Message::create([
            'from' => auth()->id(),
            'to' => $iduser,
            'text' => $request['MESSAGE']
        ]);

        broadcast(new NewMessage($message));

        return redirect('/chat');
    }
}
