<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

  public function update()
  {




      $user=Auth::user();
// this 'fills' the user model with all fields of the Input that are fillable
      $user->fill(input::all());
      $user->save(); // no validation implemented */

      return redirect('/profile')->with('message', 'Infos has been updated!');
  }

    public function profile($id) {
        $data = User::where('users.id',$id)->first();
        return view('/profile')->with('data',$data);
    }

  }
