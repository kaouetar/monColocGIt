


<link type="text/css" rel="stylesheet" href="/css/style.css" />
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animations/animations.css" rel="stylesheet">
  <link href="/lib/hover-pack/hover-pack.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/style2.css" rel="stylesheet">
  <link href="/css/colors/color-74c9be.css" rel="stylesheet">

	<script src="/lib/jquery/jquery.min.js"></script>
 <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
 <script src="/lib/php-mail-form/validate.js"></script>
 <script src="/lib/hover-pack/hover-pack.js"></script>

<style media="screen">
body{
  background: #eee url('https://blog.appartager.com/wp-content/uploads/2013/11/Trousseau-de-cl%C3%A9s-740x357.jpg');
background-size: cover;
background-repeat: no-repeat;
}
html,body{
  position: relative;
  height: 100%;
}

.login-container{
  position: relative;
  width: 400px;
  margin-top:250px;
  margin-left: 350px;
  padding: 20px 40px 40px;
  text-align: center;
  background: #fff;
  border: 1px solid #ccc;
}

#output{
  position: absolute;
  width: 300px;
  top: -75px;
  left: 0;
  color: #fff;
}

#output.alert-success{
  background: rgb(25, 204, 25);
}

#output.alert-danger{
  background: rgb(228, 105, 105);
}


.login-container::before,.login-container::after{
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 3.5px;left: 0;
  background: #fff;
  z-index: -1;
  -webkit-transform: rotateZ(4deg);
  -moz-transform: rotateZ(4deg);
  -ms-transform: rotateZ(4deg);
  border: 1px solid #ccc;

}

.login-container::after{
  top: 5px;
  z-index: -2;
  -webkit-transform: rotateZ(-2deg);
   -moz-transform: rotateZ(-2deg);
    -ms-transform: rotateZ(-2deg);

}

.avatar{
  width: 100px;height: 100px;
  margin: 10px auto 30px;
  border-radius: 100%;
  border: 2px solid #aaa;
  background-size: cover;
}

.form-box input{
  width: 100%;
  padding: 10px;
  text-align: center;
  height:40px;
  border: 1px solid #ccc;;
  background: #fafafa;
  transition:0.2s ease-in-out;

}
.glyphicon {
    margin-top: 20px;
    font-size: 50px;
}

.form-box input:focus{
  outline: 0;
  background: #eee;
}

.form-box input[type="email"]{
  border-radius: 5px 5px 0 0;
  text-transform: lowercase;
}

.form-box input[type="password"]{
  border-radius: 5px 5px 0 0;

  
}

.form-box button.login{
  margin-top:15px;
  padding: 10px 20px;
}

.animated {
-webkit-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
0% {
  opacity: 0;
  -webkit-transform: translateY(20px);
  transform: translateY(20px);
}

100% {
  opacity: 1;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}
}

@keyframes fadeInUp {
0% {
  opacity: 0;
  -webkit-transform: translateY(20px);
  -ms-transform: translateY(20px);
  transform: translateY(20px);
}

100% {
  opacity: 1;
  -webkit-transform: translateY(0);
  -ms-transform: translateY(0);
  transform: translateY(0);
}
}

.fadeInUp {
-webkit-animation-name: fadeInUp;
animation-name: fadeInUp;
}


</style>



  <div class="container">
  	<div class="login-container">
              <div id="output"></div>
              <div class="avatar"> <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> </div>
              <div class="form-box">
                  <form action="{{ route('password.request') }}" method="POST">
                      @csrf


                      <div class="card-header"><h4>{{ __('Reset Password') }}</h4></div>



                        <input type="hidden" name="token" value="{{ $token }}">

                                <input id="email" placeholder="Adresse E-mail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                <br>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                                <input id="password" placeholder="Nouveau mot de passe" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <br>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif



                                <input id="password-confirm" placeholder="Confirmer nouveau mot de passe" type="password" class="form-control" name="password_confirmation" required>
                                <br>


                                <button type="submit" class="btn btn" style="background-color:#f7c8aa;color:black;">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
