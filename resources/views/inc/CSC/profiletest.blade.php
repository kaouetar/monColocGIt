
<!------ Include the above in your HEAD tag ---------->

<style media="screen">
@import url(http://fonts.googleapis.com/css?family=Roboto);
@import url(http://fonts.googleapis.com/css?family=Signika);
a.btn:hover {
   -webkit-transform: scale(1.1);
   -moz-transform: scale(1.1);
   -o-transform: scale(1.1);
}

.addmodal-container, .editmodal-container {
text-align: center;
display:inline-block;
border-top: 1px solid;
padding: 30px;
max-width: 750px;
width: 100% !important;
background-color:white;
margin: 0 auto;

border-radius:5px;
/*box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);*/
overflow: hidden;
font-family: roboto;
box-shadow: 0px 0px 20px rgba(56,56,56,.2);
}

.addmodal-container h1, .editmodal-container h1 {
text-align: center;
font-size: 1.8em;

color: black;
font-family: Signika, serif !important;
font-size: 35px;
font-weight: normal;
line-height: 48px;
margin: 0;

}


.addmodal-container label, .editmodal-container label {
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

.addmodal-container input[type=submit], .editmodal-container input[type=submit] {

width: 100%;
display: block;
margin-bottom: 10px;
position: relative;

}



.addmodal-container textarea, .editmodal-container textarea {
    width:80%;
    border: none;
    background: #F4F4F4;
    border-bottom: 2px solid #EEE;

    padding: 0px 10px;
    opacity: 1;
    -webkit-transition: 0.2s border-color, 0.2s opacity;
    transition: 0.2s border-color, 0.2s opacity;


}
.addmodal-container textarea:focus, textarea:active, .editmodal-container textarea:focus, textarea:active{
      border-bottom: 2px solid #eda171;
      color: black  ;
}

.addmodal-container input[type=number],.editmodal-container input[type=number] {
  width: 80%;
}

.addmodal-container input[type=text], .editmodal-container input[type=text] {
  width: 80%;
}

.addmodal-container input[type=text]:hover, .editmodal-container input[type=text]:hover {

border: 1px solid #b9b9b9;
border-top: 1px solid #a0a0a0;
-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.addmodal, .editmodal {
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

.addmodal-submit,.editmodal-submit {
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

.addmodal-submit:hover, .editmodal-submit:hover {
/* border: 1px solid #2f5bb7; */
border: 0px;
text-shadow: 0 1px rgba(0,0,0,0.3);
background-color: #357ae8;
/* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.addmodal-container a, .editmodal-container a {
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


<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="addmodal-container">
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


<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">


  <div class="modal-dialog">
  <div class="addmodal-container">
    <h4 style="text-align:center;">Modifier Informations</h4> <br>
    <form method="POST" action="{{route('users.update')}}">
      {{ csrf_field() }}

          <div class="form-group" align="center">
                <input id="name" name="name" placeholder="Full name" class="edit-name form-control here" required="required" type="text" value="{{ $data->name }}" readonly>
              <br>
                <input id="email" name="email" placeholder="Email" class="edit-email form-control here" required="required" type="text" value="{{  $data->email }}" readonly>
              <br>
                <input id="telephone" name="telephone" placeholder="Telephone" class="edit-telephone form-control here" required="required" type="text" value="{{  $data->telephone }}" >
                <br>
                <textarea id="info" name="info" cols="40" rows="4" class="edit-info form-control"  >{{  $data->info }}</textarea>
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


<div style="min-height: 700px;margin-top:100px;" class="container">
    <div class="row">
        <div class="col-xs-18 col-sm-8 col-md-8">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4" >
                        <img src="https://png.pngtree.com/svg/20170629/icon_personal_information_728344.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">

                          <h3>  {{$data->name}}</h3>
                        <small><cite title="San Francisco, USA">Tanger, 90000 <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>  {{$data->email}}
                            <br />
                            <i class="glyphicon glyphicon-earphone"></i>  {{$data->telephone}}
                            <br />
                            <i class="glyphicon glyphicon-list-alt"></i>  {{$data->info}}</p>
                        <!-- Split button -->
                        <br>
                        <a href="#test" onclick="myFunctionUpdateProfile()"  data-toggle="modal" data-target="#edit-modal" class="btn btn-secondary a-btn-slide-text" style="background-color:#eda171;color:white;;" >
                        <span class="glyphicon glyphicon-edit" aria-hidden="true">Modifier infos</span></a> <br> <br>
                        <a href="#test" onclick="deleteAlertWrongPassword()" data-toggle="modal" data-target="#add-modal" class="btn btn-secondary a-btn-slide-text" style="background-color:#eda171;color:white;" >
                        <span class="glyphicon glyphicon-edit" aria-hidden="true">Changer mot de passe</span></a>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
  function myFunctionUpdateProfile() {
      var xd = {!! json_encode($data->toArray()) !!};
      console.log(xd);
      var title = $(".edit-name" ).val(xd.name);
      var title = $(".edit-email" ).val(xd.email);
      var title = $(".edit-telephone" ).val(xd.telephone);
      var title = $(".edit-info" ).val(xd.info);

     
  }
  </script>