<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use Validator;
use App\User;
use Illuminate\Support\Facades\Auth;
use \Input as Input;

class UploadController extends Controller {
  

	public function upload(Request $request){
    $this->validate($request, [
       'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   ]);

   $image = $request->file('image');

   $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

   $destinationPath = public_path('/images');

   $image->move($destinationPath, $input['imagename']);


   $this->postImage->add($input);


   return back()->with('success','Image Upload successful');
		}

	}
}
