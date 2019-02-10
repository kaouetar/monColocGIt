
<!------ Include the above in your HEAD tag ---------->

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->




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
      					<button type="button" class="btn btn btn-sm" style="background-color:#eda171;color:white">Message</button>
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

    <div class="fb-profile">
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
            <img align="left" class="fb-image-lg" src="https://images.prop24.com/199025065/Crop481x298" alt="House"/>
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
