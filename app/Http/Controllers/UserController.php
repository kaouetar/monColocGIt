<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function edit(User $user)
  {
      $user = Auth::user();
      return view('users.edit', compact('user'));
  }

  public function update2(Request $req)
  {
      $user=Auth::user();
// this 'fills' the user model with all fields of the Input that are fillable
      $user=user::where('iduser', auth()->id())->update($req()->except(['_token']));

      //$user->fill(input::all());
      //$user->email = \Input::get('email');  // email is just an example.... 
      //$user->name = \Input::get('name'); // just an example... 
      //$user->save(); // no validation implemented */

      return redirect('/profile')->with('message', 'Infos has been updated!');
  }

  public function update(Request $request)
  {
        $req = request()->except(['_token','submit']);

      $user=user::where('ID', auth()->id())->update($req);

      return redirect('/profile/'. auth()->id())->with('message', 'Infos has been updated!');

  }

    public function profile($id) {
        $data = User::where('users.id',$id)->first();
        return view('/profile')->with('data',$data);
    }

  }
