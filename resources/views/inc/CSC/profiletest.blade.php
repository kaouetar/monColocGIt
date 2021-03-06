

<style media="screen">
@import url(http://fonts.googleapis.com/css?family=Roboto);
@import url(http://fonts.googleapis.com/css?family=Signika);
a.btn:hover {
   -webkit-transform: scale(1.1);
   -moz-transform: scale(1.1);
   -o-transform: scale(1.1);
}
.addmodal-container, .editmodal-container,.editpwdmodal-container, .editinfomodal-container {
text-align: center;
display:inline-block;
border-top: 1px solid;
padding: 30px;
max-width: 700px;
width: 100% !important;
background-color:white;
margin: 0 auto;

border-radius:5px;
/*box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);*/
overflow: hidden;
font-family: roboto;
box-shadow: 0px 0px 20px rgba(56,56,56,.2);
}

.addmodal-container h1, .editmodal-container h1, .editpwdmodal-container h1, .editinfomodal-container h1 {
text-align: center;
font-size: 1.8em;

color: black;
font-family: Signika, serif !important;
font-size: 35px;
font-weight: normal;
line-height: 48px;
margin: 0;

}


.addmodal-container label, .editmodal-container label, .editpwdmodal-container label, .editinfomodal-container label {
  margin: 0;
  padding: 0;
  display: inline-block;
  font-size: 100%;
  padding-top: .1em;
  padding-right: .2em;
  width: 6em;
  text-align: left;
  float: left;
}​

.addmodal-container input[type=submit], .editmodal-container input[type=submit], .editpwdmodal-container input[type=submit], .editinfomodal-container input[type=submit] {

width: 100%;
display: block;
margin-bottom: 10px;
position: relative;

}



.addmodal-container textarea, .editmodal-container textarea, .editpwdmodal-container textarea, .editinfomodal-container textarea {
    width:80%;
    border: none;
    background: #F4F4F4;
    border-bottom: 2px solid #EEE;

    padding: 0px 10px;
    opacity: 1;
    -webkit-transition: 0.2s border-color, 0.2s opacity;
    transition: 0.2s border-color, 0.2s opacity;


}
.addmodal-container textarea:focus, textarea:active, .editmodal-container textarea:focus, textarea:active, .editinfomodal-container textarea:focus, textarea:active, .editpwdmodal-container textarea:focus, textarea:active{
      border-bottom: 2px solid #eda171;
      color: black  ;
}

.addmodal-container input[type=number],.editmodal-container input[type=number], .editpwdmodal-container input[type=number], .editinfomodal-container input[type=number] {
  width: 80%;
}

.addmodal-container input[type=text], .editmodal-container input[type=text], .editpwdmodal-container input[type=text], .editinfomodal-container input[type=text] {
  width: 80%;
}

.addmodal-container input[type=text]:hover, .editmodal-container input[type=text]:hover, .editpwdmodal-container input[type=text]:hover, .editinfomodal-container input[type=text]:hover {

border: 1px solid #b9b9b9;
border-top: 1px solid #a0a0a0;
-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.addmodal, .editmodal, .editpwdmodal, .editinfomodal-submit {
text-align: left;
font-size: 14px;
font-family: 'Arial', sans-serif;
font-weight: 700;
height: 36px;
padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
user-select: none; */
}

.addmodal-submit,.editmodal-submit, .editpwdmodal-submit, .editinfomodal-submit {
/* border: 1px solid #3079ed; */
border: 0px;
color: #fff;
text-shadow: 0 1px rgba(0,0,0,0.1);
background-color: #4d90fe;
padding: 17px 0px;
font-family: roboto;
font-size: 14px;
/* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.addmodal-submit:hover, .editmodal-submit:hover, .editpwdmodal-submit:hover, .editinfomodal-submit:hover {
/* border: 1px solid #2f5bb7; */
border: 0px;
text-shadow: 0 1px rgba(0,0,0,0.3);
background-color: #357ae8;
/* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.addmodal-container a, .editmodal-container a, .editpwdmodal-container a, .editinfomodal-container a {
text-decoration: none;
color: #666;
font-weight: 400;
text-align: center;
display: inline-block;
opacity: 0.6;
transition: opacity ease 0.5s;
}

.add-help, .edit-help{
font-size: 12px;
}


</style>

<script>
  function mySubmitFunction(e) {
    if( $('#password').val() == $('#confirmnewpass').val()){
      return true;
    }else{
      $('#divAlertTobeDeleted').remove();
      $('#password').before('<div id="divAlertTobeDeleted" class="alert alert-danger" role="alert">  Les mots de passes ne correspondent pas! </div> ');
      e.preventDefault();
      return false;
    }
  }

  function deleteAlertWrongPassword(){
    $('#divAlertTobeDeleted').remove()
    $('#password').val('')
    $('#confirmnewpass').val('')
  }
 </script>



<!------ Include the above in your HEAD tag ---------->




<div class="modal fade" id="edit-pwd-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="editpwdmodal-container">
          <h4 style="text-align:center;">Modifier Mot de passe</h4> <br>



          <form class='.testingadddiv' method="POST" action="{{route('users.update')}}" onsubmit="return mySubmitFunction(event)">
        {{ csrf_field() }}


                        <input id="password" name="password" placeholder="Nouveau mot de passe" class="form-control" type="password">
                        <br>
                        <input id="confirmnewpass" name="confirmnewpass" placeholder="Confirmer Nouveau mot de passe" class="form-control" type="password">
                        <br>
                        <button input name="submit" type="submit" class="btn btn-secondary" >Modifier mot de passe</button>


              </form>

          </div>
        </div>
      </div>


<!-- other model -->


<div class="modal fade" id="edit-info-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">


  <div class="modal-dialog">
  <div class="editinfomodal-container">
    <h4 style="text-align:center;">Modifier Informations</h4> <br>
    <form method="POST" action="{{route('users.update')}}">
      {{ csrf_field() }}

          <div class="form-group" align="center">
                <input id="name" name="name" placeholder="Full name" class="edit-name form-control here" required="required" type="text" value="{{ Auth::user()->name }}" readonly>
              <br>
                <input id="email" name="email" placeholder="Email" class="edit-email form-control here" required="required" type="text" value="{{  Auth::user()->email }}" readonly>
              <br>
                <input id="telephone" name="telephone" placeholder="Telephone" class="edit-telephone form-control here" required="required" type="text" value="{{  Auth::user()->telephone }}" >
                <br>
                <textarea id="info" name="info" cols="40" rows="4" class="edit-info form-control"  >{{  Auth::user()->info }}</textarea>
                <br>

               <div class="form-group row">
                 <div class="offset-4 col-8"  style="color : #868F9B" >
                  <button name="submit" type="submit" class="btn btn-secondary" style="color:black;">Sauvegarder </button>
                 </div>
               </div>
          </div>
        </form>

    </div>
  </div>




    </div>



<!-- end other model -->


<div style="min-height: 100px;margin-top:100px;margin-right:10px;" class="container" >
    <div class="row">
        <div class="col-xs-9 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-6" >
                        <img src="https://png.pngtree.com/svg/20170629/icon_personal_information_728344.png" alt="" class="img-rounded img-responsive" style="margin-left:30px;margin-top:20px;height:200px;" />
                    </div>
                    <div class="col-sm-4 col-md-4" style="margin-top:20px">

                          <h3>  {{Auth::user()->name}}</h3>
                        <small><cite title="San Francisco, USA">Tanger, 90000 <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>  {{Auth::user()->email}}
                            <br />
                            <i class="glyphicon glyphicon-earphone"></i>  {{Auth::user()->telephone}}
                            <br />
                            <i class="glyphicon glyphicon-list-alt"></i>  {{Auth::user()->info}}</p>
                        <!-- Split button -->
                        <br>
                        <a href="#test" onclick="myFunctionUpdateProfile()"  data-toggle="modal" data-target="#edit-info-modal" class="btn btn-secondary a-btn-slide-text" style="background-color:#eda171;color:white;;" >
                        <span class="glyphicon glyphicon-edit" aria-hidden="true">Modifier infos</span></a> <br> <br>
                        <a href="#test" onclick="deleteAlertWrongPassword()" data-toggle="modal" data-target="#edit-pwd-modal" class="btn btn-secondary a-btn-slide-text" style="background-color:#eda171;color:white;" >
                        <span class="glyphicon glyphicon-edit" aria-hidden="true">Changer mot de passe</span></a>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
  function myFunctionUpdateProfile() {
      var xd = {!! json_encode(Auth::user()->toArray()) !!};
      console.log(xd);
      var title = $(".edit-name" ).val(xd.name);
      var title = $(".edit-email" ).val(xd.email);
      var title = $(".edit-telephone" ).val(xd.telephone);
      var title = $(".edit-info" ).val(xd.info);


  }
  </script>
<div id="offers" class="section " style="background: white;">

  <div class="container">

      <div class="row mt centered ">
        <div class="col-lg-4 col-lg-offset-4">
          <h3>Vos publications <a href="#" data-toggle="modal" data-target="#add-modal" class="btn btn-secondary a-btn-slide-text"style="margin-left:0px;background-color:#eda171;color:white">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Ajouter</strong></span>
    </a></h3>
          <hr>
        </div>
        @if (count($errors) > 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> Problème au niveau de vos données<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>
        @endif
        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            	  <div class="modal-dialog">
        				<div class="addmodal-container">
        					<h1>Ajouter une offre</h1><br>
                        {!! Form::open(['url' => 'create/post/add','files' => true , 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                                    {{Form::label('Titre',"Titre")}} {{Form::text('TITRE','',['required' => 'required' ,'class' => 'form-control' , 'placeholder' => 'Titre de l\'offre' ])}}
                                <br>
                                    {{Form::label('Nombre actuel','Nombre')}}
                                    {{Form::number('CAPACITEUTILISE','',['min'=>0,'required' => 'required' ,'class' => 'form-control' , 'placeholder' => 'Nombre de colocataires' ])}}
                                <br>
                                {{Form::label('Capacité','Nombre')}}
                                {{Form::number('CAPACITEMAX','',['min'=>1,'required' => 'required' ,'class' => 'form-control' , 'placeholder' => 'Capacité maximale' ])}}
                                <br>
                                {{Form::label('Prix',"Prix / moix")}}
                                {{Form::text('PRIXMENSUEL','',['required' => 'required' ,'class' => 'form-control' , 'placeholder' => 'Prix mensuel' ] )}}
                                <br>

                              <fieldset>
                              {{Form::label('Description','Description')}}
                              {{Form::textarea('DESCRIPTION','',['required' => 'required' ,'class' => 'form-control' , 'placeholder' => 'Décrivez votre offre' ] )}}
                            </fieldset>
                            <br>
                            <fieldset>
                            {{Form::label('Adresse','Adresse')}}
                            {{Form::textarea('ADRESSE','',['required' => 'required' ,'class' => 'form-control' , 'placeholder' => 'Votre adresse ' ] )}}
                            </fieldset>
                            <br>
                            {{Form::label('Image',"Image")}}
                            {{Form::file('IMAGE',array('class' => 'image'))}}
                  <div class="text-center">
                    <br>
                    <button type="submit" style="background-color:#f7c8aa; margin-left:390px" class="btn btn">
                        {{ __('Créer Offre') }}
                    </button>

                  </div>
                </div>

              {!! Form::close() !!}

        				</div>
        			</div>
        		  </div>


<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">


	</div>
</div>

      </div>
      <!-- /row -->
      @foreach($data->chunk(3) as $chunk)
        <div class="row mt">
          @foreach( $chunk as $article)
          <div class="modal fade" id="edit-modal-{{$article->IDPUBLICATION}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                  <div class="editmodal-container">
                    <script type="text/javascript">
                    function myFunction{{$article->IDPUBLICATION}}() {
                          //console.log($(this).val({{$article->CAPACITEMAX}});
                        var xd = {!! json_encode($article->toArray()) !!};
                        console.log(xd);
                        var title = $(".Titre"+{{ $article->IDPUBLICATION}} ).val(xd.TITRE);
                        var title = $(".Capaciteutil"+{{ $article->IDPUBLICATION}} ).val(xd.CAPACITEUTILISE);
                        var title = $(".Capacitemax"+{{ $article->IDPUBLICATION}} ).val(xd.CAPACITEMAX);
                        var title = $(".Prix"+{{ $article->IDPUBLICATION}} ).val(xd.PRIXMENSUEL);
                        var title = $(".Description"+{{ $article->IDPUBLICATION}} ).val(xd.DESCRIPTION);
                        var title = $(".Adresse"+{{ $article->IDPUBLICATION}} ).val(xd.ADRESSE);
                        //var title = $(".Image"+{{ $article->IDPUBLICATION}} ).val(xd.TITRE);

                    }
                    </script>
                    <h1>Modifier l'offre</h1><br>
                          {!! Form::open(['url' => 'create/post/update/'.$article->IDPUBLICATION, 'files' => true , 'enctype' => 'multipart/form-data']) !!}
                  <div class="form-group">
                                      {{Form::label('Titre',"Titre")}}
                                      {{Form::text('Titre','',['id'=>'Titre','class' => 'Titre'.$article->IDPUBLICATION.' form-control'  ] )}}
                                  <br>
                                      {{Form::label('Nombre actuel','Nombre')}}
                                      {{Form::number('CAPACITEUTILISE','',['min'=>0,'id'=>'NombrePersonnes','class' => 'Capaciteutil'.$article->IDPUBLICATION.' form-control' ] )}}
                                  <br>
                                      {{Form::label('Capacité','Nombre')}}
                                      {{Form::number('CAPACITEMAX','',['min'=>1,'id'=>'Capacité','class' => 'Capacitemax'.$article->IDPUBLICATION.' form-control' , 'placeholder' => 'Capacité maximale' ] )}}
                                  <br>
                                      {{Form::label('Prix',"Prix / moix")}}
                                      {{Form::text('PRIXMENSUEL','',['id'=>'Prix','class' => 'Prix'.$article->IDPUBLICATION.' form-control' , 'placeholder' => 'Prix mensuel' ] )}}
                                  <br>

                                <fieldset>
                                    {{Form::label('Description','Description')}}
                                    {{Form::textarea('DESCRIPTION','',['id'=>'Description','class' => 'Description'.$article->IDPUBLICATION.' form-control' , 'placeholder' => 'Décrivez votre offre' ] )}}
                              </fieldset>
                              <br>
                              <fieldset>
                                  {{Form::label('Adresse','Adresse')}}
                                  {{Form::textarea('ADRESSE','',['id'=>'Adresse','class' => 'Adresse'.$article->IDPUBLICATION.' form-control' , 'placeholder' => 'Votre adresse ' ] )}}
                              </fieldset>
                              <br>
                      <div class="form-group">
                                  {{Form::label('Image',"Image")}}
                                  {{Form::file('IMAGE',array('class' => 'Image'.$article->IDPUBLICATION.' image'))}}
                                </div>
                    <div class="text-center">
                      <br>
                      <button type="submit" style="background-color:#f7c8aa; margin-left:390px" class="btn btn">
                          {{ __('Enregistrer') }}
                      </button>

                    </div>
                  </div>

                {!! Form::close() !!}

                  </div>
                </div>
                </div>

          <div class="col-lg-4 col-md-4 col-xs-12 desc ">
              @if (Storage::disk('local')->has('pubImg'.$article->IDPUBLICATION.'-user'.$article->IDUSER.'.jpeg'))

                      <a style="object-fit: cover; width: 100%; height: 300px;" class="b-link-fade b-animate-go" href="/offerinfo/details/{{$article->IDPUBLICATION}}">
                      <img style="
                          object-fit: cover;
                          width: 100%;
                          height: 100%"
                      src="/userimage/{{'pubImg'.$article->IDPUBLICATION.'-user'.$article->IDUSER.'.jpeg'}}" alt=""
                      />
            @else
               <a style="object-fit: cover; width: 100%; height: 300px;" class="b-link-fade b-animate-go" href="/offerinfo/details/{{$article->IDPUBLICATION}}">
                    <img style="object-fit: cover;
                    width: 100%;
                    height: 100%" src="img/portfolio/port04.jpg" alt="" />

            @endif

              <div class="b-wrapper">
                  <h4 class="b-from-left b-animate b-delay03">{{$article->TITRE}}</h4>
                  <p class="b-from-right b-animate b-delay03">Read More.</p>
              </div>
            </a>

            <p>{{$article->TITRE}}
              <a href="#test" data-toggle="modal" data-mytitle="{{$article->TITRE}}" data-mydescription="{{$article->DESCRIPTION}}" data-id="{{$article->IDPUBLICATION}}" data-capacite="{{$article->CAPACITEMAX}}" data-nombre="{{$article->CAPACITEUTILISE}}"  data-target="#edit-modal-{{$article->IDPUBLICATION}}" class="btn btn-secondary a-btn-slide-text" style="background-color:#eda171;color:white;float:right;" onclick="myFunction{{$article->IDPUBLICATION}}()">
              <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>


               <a href="/post/delete/{{$article->IDPUBLICATION}}" class="btn btn-secondary a-btn-slide-text"style="float:right;background-color:#eda171;color:white;">
              <span class="glyphicon glyphicon-trash" aria-hidden="true" ></span></a>
           </p>
            <p style = " overflow: hidden;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical; max-height: 96px;min-height: 96px;   "class="lead">
              {{$article->DESCRIPTION}}
            </p>
            <hr-d>
              <p class="time"><i class="fa fa-user-o"></i> {{$article->name}} | <i class="fa fa-calendar"></i> {{ date('d M y H:m', strtotime($article->DATECREATION)) }}</p>
          </div>
            @endforeach
      </div>
      @endforeach

      <!-- /row -->
    </div>
    <!-- /container -->



</div>


<script src="{{asset('/js/app.js')}}"></script>



<!-- /About -->
