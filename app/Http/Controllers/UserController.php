<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($id) {
        $data = User::where('users.id',$id)->first();
        return view('/profile')->with('data',$data);
    }

    public function edit(User $user)
    {
        $user = Auth::user();
        return view('settings', compact('user'));
    }

    public function update(User $user)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'telephone' => 'required',
            //'oldpass'= $user->password ,
            'newpass' => 'required|min:6|confirmed',
            'publicinfo' => 'required',
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->Telephone =request('Telephone');
        $user->password = bcrypt(request('newpass'));


        $user->save();

        return back();
    }
}
