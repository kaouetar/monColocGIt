<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ContactUS;
use Validator;
use Mail;


class contactus_Controller extends Controller
{
  public function submitHome(Request $request){
    $rules=[
      'Name' => 'required',
      'Email' => 'required|email',
      'Subject' => 'required',
      'Message' => 'required'
    ];

    $validator = Validator::make($request->all(),$rules );

      if ($validator->fails()) {
          return redirect('/#contact')
                      ->withErrors($validator)
                      ->withInput()
                      ->with('contacterrors',true);
      }

      //Create New Message
      $contactus= new ContactUS;
      $contactus->Name          = $request->input('Name'        );
      $contactus->Email         = $request->input('Email'       );
      $contactus->Subject       = $request->input('Subject'     );
      $contactus->Message       = $request->input('Message'     );
      $contactus->save();


      return redirect('/#contact')->withInput()->with('success','Message a été envoyé avec succes');
  }


    public function submitECC(Request $request){
      $rules=[
        'Name' => 'required',
        'Email' => 'required|email',
        'Subject' => 'required',
        'Message' => 'required'
      ];

      $validator = Validator::make($request->all(),$rules );

        if ($validator->fails()) {
            return redirect('/Ensat_CD#contact')
                        ->withErrors($validator)
                        ->withInput()
                        ->with('contacterrors',true);
        }

        //Create New Message
        $contactus= new ContactUS;
        $contactus->Name          = $request->input('Name'        );
        $contactus->Email         = $request->input('Email'       );
        $contactus->Subject       = $request->input('Subject'     );
        $contactus->Message       = $request->input('Message'     );
        $contactus->save();


        return redirect('/ENSAT_CD#contact')->withInput()->with('success','Message a été envoyé avec succes');
    }


}
