<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\article;
use Validator;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;


class ArticleController extends Controller
{
    //
    public function index() {
        $data = article::orderBy('DATECREATION', 'desc')
        ->join('users', 'users.id', '=', 'publicationlogement.iduser')->where('publicationlogement.visible',1)->get();


        return view('/offerstest')->with('data',$data);
    }
    public function offerDetails($idpub) {
        $data = article::orderBy('DATECREATION', 'desc')
        ->join('users', 'users.id', '=', 'publicationlogement.iduser')->where('publicationlogement.visible',1)
        ->where('publicationlogement.idpublication','=',$idpub)->first();

        return view('panel')->with('data',$data);
    }

    public function getArticleForm()
    {
        return view('');
    }

    public function submit(Request $request){


          //Create New Message
          $ajoutArticle= new article;
          $ajoutArticle->TITRE= $request->input('TITRE'        );
          $ajoutArticle->DESCRIPTION= $request->input('DESCRIPTION'      );
        //  $ajoutArticle->Prixmensuel= $request->input('Prix/Mois'      );
          $ajoutArticle->ADRESSE= $request->input('ADRESSE'      );
          $ajoutArticle->CAPACITEMAX= $request->input('CAPACITEMAX'      );
          $ajoutArticle->CAPACITEUTILISE=$request->input('CAPACITEUTILISE' );
          $ajoutArticle->PRIXMENSUEL=$request->input('PRIXMENSUEL' );
          $ajoutArticle->VISIBLE=1;
          $ajoutArticle->DATECREATION= \DB::raw('now()');
          $ajoutArticle->IDUSER=  Auth::id();
          $ajoutArticle->save();
          $file = $request->file('IMAGE');
          $filename = 'pubImg'.$ajoutArticle->IDPUBLICATION.'-user'.$ajoutArticle->IDUSER.'.jpeg';
          if($request->hasFile('IMAGE')){
 //           Storage::disk('local') -> put($filename, file_get_contents($file -> getRealPath()));
            Storage::disk('local') -> put($filename, File::get($file) );
          }

          return redirect('myoffers')->withInput()->with('success','Article ajoutée!');
        }

    public function myOffers() {
        $data = article::orderBy('DATECREATION', 'desc')
        ->join('users', 'users.id', '=', 'publicationlogement.iduser')->where('users.id',Auth::id())->get();

        return view('/profile')->with('data',$data);
    }

    public function getArticleImage($filename)
    {
      $file = Storage::disk('local')->get($filename);
      return new Response($file, 200);
    }

    public function destroy($id) {

        //$article = article::findOrFail($id);
        //$article->destroy();
        article::destroy($id);
        return redirect('/myoffers');
    }
    public function update(Request $request, $id)
    {
        $req = request()->except(['_token','Image']);
        $article=article::where('idpublication', $id)->update($req);

        return redirect('/myoffers');

    }


}
