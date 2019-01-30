<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use Validator;

class ArticleController extends Controller
{
    //
    public function index() {
        $data = article::orderBy('created_at', 'desc')->get();
        return view('/home')->with('data',$data);
    }

    public function getArticleForm() 
    {
        return view('panel');
    }

    public function submit(Request $request){
        $rules=[
          'Titre' => 'required|between:1,100',
          'Auteur' => 'required|between:1,20',
          'Contenu' => 'required|min:5',
        ];
  
        $validator = Validator::make($request->all(),$rules );
  
          if ($validator->fails()) {
              return redirect('home')
                          ->withErrors($validator)
                          ->withInput();
          }
  
          //Create New Message
          $ajoutArticle= new article;
          $ajoutArticle->Titre= $request->input('Titre'        );
          $ajoutArticle->Auteur= $request->input('Auteur'      );
          $ajoutArticle->Contenu= $request->input('Contenu'      );

          $ajoutArticle->save();

          return redirect('home')->withInput()->with('success','Article ajoutée!');
        }
          
}           
