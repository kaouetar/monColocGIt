
<!------ Include the above in your HEAD tag ---------->

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->




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

<style>
body {
    background: #F1F3FA;
  }

  /* Profile container */
  .profile {
    margin: 20px 0;
  }

  /* Profile sidebar */
  .profile-sidebar {
    padding: 20px 0 10px 0;
    background: #fff;
    border-radius: 50px;
  }

  .profile-userpic img {
    float: none;
    margin: 0 auto;
    width: 50%;
    height: 50%;
    -webkit-border-radius: 50% !important;
    -moz-border-radius: 50% !important;
    border-radius: 50% !important;
  }

  .profile-usertitle {
    text-align: center;
    margin-top: 20px;
  }

  .profile-usertitle-name {
    color: #5a7391;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 7px;
  }

  .profile-usertitle-job {
    text-transform: uppercase;
    color: #5b9bd1;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .profile-userbuttons {
    text-align: center;
    margin-top: 10px;

  }
  .ul .nav {
    width: 100%
  }

  .profile-userbuttons .btn {
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 600;
    margin-right: 5px;


  }

  .profile-userbuttons .btn:last-child {
    margin-right: 0px;
  }

  .profile-usermenu {
    margin-top: 30px;
  }

  .profile-usermenu ul  {
    width:100%;
  }

  .profile-usermenu ul li:last-child {
    border-bottom: none;

  }

  .profile-usermenu ul li  {
    color: #93a3b5;
    font-size: 16px;
    font-weight: 400;
    text-align: center;
  }

  .profile-usermenu ul li i {
    margin-right: 8px;
    font-size: 14px;
  }

  .profile-usermenu ul  {
    display: table;

    color: #5b9bd1;
  }

  .profile-usermenu ul li.active {
    border-bottom: none;
  }

  .profile-usermenu ul li.active a {
    color: #5b9bd1;
    background-color: #f6f9fb;
    border-left: 2px solid #5b9bd1;
    margin-left: -2px;
  }

  /* Profile Content */
  .profile-content {
    padding: 20px;
    background: #fff;
    min-height: 460px;
    border-radius: 30px;
  }

  .fb-profile img.fb-image-lg{
      z-index: 0;
      margin-bottom: 10px;
      display: block;
      margin: 0 auto;

  }
  .fb-profile
  {
    display: table;
  }

  .fb-image-profile
  {
      margin: -90px 10px 0px 50px;
      z-index: 9;
      width: 20%;
  }

  @media (max-width:768px)
  {

  .fb-profile-text>h1{
      font-weight: 700;
      font-size:20px;
  }

  .fb-image-profile
  {
      margin: -45px 10px 0px 25px;
      z-index: 9;
      width: 20%;
  }
  }

</style>



<div class="container">
    <div class="row profile">
		<div class="col-md-4">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://png.pngtree.com/svg/20170322/095953b09c.svg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name" >

            {{$data->name}}
					</div>
					<div class="profile-usertitle-job">

					</div>
				</div>

				<div class="profile-usermenu">
					<ul class="nav">
						<li style="margin-bottom:30px;">
							<i class="glyphicon glyphicon-earphone"></i>
							{{$data->telephone}} <br>
						</li>

              <li style="margin-bottom:30px;">
  							<i class="glyphicon glyphicon-envelope"></i>
  							{{$data->email}} <br>

						</li>
						<li>
              <div class="profile-userbuttons"style="margin-bottom:20px;">
      					<!-- <button type="button" class="btn btn-success btn-sm">Follow</button> -->
                @if(Auth::user()->id != $data->id)
                <a href="#test" data-toggle="modal"  data-target="#messageModal" class="btn btn btn-sm" style="background-color:#eda171;color:white">
                  <span>Message</span>
                </a>
                @else
                <button type="button" class="btn btn btn-sm" style="background-color:#eda171;color:white">Paramètres</button>
                @endif
      				</div>
            </li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-8">
            <div class="profile-content">
			   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="container"  style="
object-fit: cover;
width: 100%;">



<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="editmodal-container">
      <h1>Modifier l'offre</h1><br>
            {!! Form::open(['url' => '/conversation/sendFirst/'.$data->IDUSER]) !!}
    <div class="form-group">

                <fieldset>
                    {{Form::label('Message','Message')}}
                    {{Form::textarea('MESSAGE','',['id'=>'Message','class' => ' form-control' , 'placeholder' => 'Votre message ' ] )}}
                </fieldset>
                <br>

                {!! Form::close() !!}
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


    <div class="fb-profile" style="width: 100%;">
       <div class="row">

          @if (Storage::disk('local')->has('pubImg'.$data->IDPUBLICATION.'-user'.$data->IDUSER.'.jpeg'))

             <div class="col-sm" >
              <img style="
              object-fit: cover;
              width: 100%;
              height: 500px" align="center" class="fb-image-lg" src="/userimage/{{'pubImg'.$data->IDPUBLICATION.'-user'.$data->IDUSER.'.jpeg'}}"  alt="House"/>
            </div>

          @else
            <div class="col-sm">
            <img style="
            object-fit: cover;
            width: 100%;
            height: 500px" align="center"  class="fb-image-lg" src="/img/portfolio/port04.jpg" alt="House"/>
            </div>
          @endif

     </div>
    </div>

        <div class="fb-profile-text">
          <div class="row" >
           <div class="" >
            <h1>{{$data->TITRE}}</h1>
        </div>
      </div>
      <div class="row">
       <div class="">
        <p>{{$data->DESCRIPTION}} Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

        </div>
    </div>
</div> <!-- /container -->
            </div>
		</div>
	</div>
</div>

<br>
<br>
