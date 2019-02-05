<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use Validator;
use App\User;

class ArticleController extends Controller
{
    //
    public function index() {
        $data = article::orderBy('DATECREATION', 'desc')->get();
        return view('/offers')->with('data',$data);
    }

    public function getArticleForm()
    {
        return view('panel');
    }

    public function submit(Request $request){
        $rules=[
          'Titre' => 'required|between:1,100',
          'Description' => 'required|min:5',
          'Prix/Mois' => 'required|between:1,20',
          'Adresse' => 'required|min:5',
          'Nombre de personnes' => 'required|between:1,10',

        ];

        $validator = Validator::make($request->all(),$rules );

          if ($validator->fails()) {
              return redirect('offers')
                          ->withErrors($validator)
                          ->withInput();
          }

          //Create New Message
          $ajoutArticle= new article;
          $ajoutArticle->Titre= $request->input('Titre'        );
          $ajoutArticle->Description= $request->input('Description'      );
          $ajoutArticle->Prixmensuel= $request->input('Prix/Mois'      );
          $ajoutArticle->Adresse= $request->input('Adresse'      );
          $ajoutArticle->Capacitemax= $request->input('Nombre de personnes'      );


          $ajoutArticle->save();

          return redirect('offers')->withInput()->with('success','Article ajoutée!');
        }
    


}
