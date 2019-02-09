<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use Validator;
use App\User;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    //
    public function index() {
        $data = article::orderBy('DATECREATION', 'desc')
        ->join('users', 'users.id', '=', 'publicationlogement.iduser')->get();


        return view('/offerstest')->with('data',$data);
    }


    public function getArticleForm()
    {
        return view('panel');
    }

    public function submit(Request $request){


          //Create New Message
          $ajoutArticle= new article;
          $ajoutArticle->Titre= $request->input('Titre'        );
          $ajoutArticle->Description= $request->input('Description'      );
        //  $ajoutArticle->Prixmensuel= $request->input('Prix/Mois'      );
          $ajoutArticle->Adresse= $request->input('Adresse'      );
          $ajoutArticle->Capacitemax= $request->input('NombrePersonnes'      );
          $ajoutArticle->iduser=  Auth::id();


          $ajoutArticle->save();

          return redirect('offers')->withInput()->with('success','Article ajoutée!');
        }

    public function myOffers() {
        $data = article::orderBy('DATECREATION', 'desc')
        ->join('users', 'users.id', '=', 'publicationlogement.iduser')->where('users.id',Auth::id())->get();

        return view('/myofferstest')->with('data',$data);
    }



}
