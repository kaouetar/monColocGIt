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
        ->join('users', 'users.id', '=', 'publicationlogement.iduser')->where('publicationlogement.visible',1)->get();


        return view('/offerstest')->with('data',$data);
    }


    public function getArticleForm()
    {
        return view('');
    }

    public function submit(Request $request){

          $rules=[
            'TITRE' => 'required|between:1,50',
            'DESCRIPTION' => 'required|between:1,50',
            'ADRESSE' => 'required|between:5,50',
            //'Participant1Mail' => 'required|between:5,50|email',
            //'CoachName' => 'required|between:1,50',
            //'CoachMail' => 'required|between:5,50|email',
            //'CoachPhone' => 'required|between:10,20'
          ];

          $validator = Validator::make($request->all(),$rules );

            if ($validator->fails()) {
              return "hello";
              //  return redirect('Ensat_CD#InscriptionComp')
                        //    ->withErrors($validator)
                          //  ->withInput();
            }
          //Create New Message
          $ajoutArticle= new article;
          $ajoutArticle->TITRE= $request->input('Titre'        );
          $ajoutArticle->DESCRIPTION= $request->input('Description'      );
        //  $ajoutArticle->Prixmensuel= $request->input('Prix/Mois'      );
          $ajoutArticle->ADRESSE= $request->input('Adresse'      );
          $ajoutArticle->CAPACITEMAX= $request->input('Capacité'      );
          $ajoutArticle->CAPACITEUTILISE=$request->input('NombrePersonnes' );
          $ajoutArticle->PRIXMENSUEL=$request->input('Prixmensuel' );
          $ajoutArticle->VISIBLE=1;
          $ajoutArticle->DATECREATION= \DB::raw('now()');
          $ajoutArticle->IDUSER=  Auth::id();


          $ajoutArticle->save();

          return redirect('offers')->withInput()->with('success','Article ajoutée!');
        }

    public function myOffers() {
        $data = article::orderBy('DATECREATION', 'desc')
        ->join('users', 'users.id', '=', 'publicationlogement.iduser')->where('users.id',Auth::id())->get();

        return view('/myofferstest')->with('data',$data);
    }

    public function delete($id)
    {

    }

    public function destroy($id) {

        $article = article::findOrFail($id);
        $article->VISIBLE=0;
        $article->save();



    }
    public function update(Request $request, $id)
    {
        $req = request()->except(['_token','Image']);
        $article=article::where('idpublication', $id)->update($req);

        return redirect('/myoffers');

    }


}
