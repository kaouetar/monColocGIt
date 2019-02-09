@extends('layouts.CSC')

@section('stylesheet')
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animations/animations.css" rel="stylesheet">
  <link href="lib/hover-pack/hover-pack.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style2.css" rel="stylesheet">
  <link href="css/colors/color-74c9be.css" rel="stylesheet">

	<script src="lib/jquery/jquery.min.js"></script>
 <script src="lib/bootstrap/js/bootstrap.min.js"></script>
 <script src="lib/php-mail-form/validate.js"></script>
 <script src="lib/hover-pack/hover-pack.js"></script>
@endsection('stylesheet')

@section('Background')
<!-- Background Image -->
	<div class="bg-img" style="background-image: url('https://blog.appartager.com/wp-content/uploads/2013/11/Trousseau-de-cl%C3%A9s-740x357.jpg');">
	<div class="overlay"></div>
</div>
<!-- /Background Image -->
@endsection('Background')

@section('NavigationBar')
<!--  Main navigation  -->
<ul class="main-nav nav navbar-nav navbar-right" style="margin-left:50px;">
	<li><a href="/">Accueil</a></li>
	<li><a href="/#about">A propos de nous</a></li>
	<li><a href="/#contact">Contact</a></li>

	@guest
	<li><a href="login">Connexion</a></li>
	@else
	<li><a href="offers">Offres Disponibles</a></li>

	<li>
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
      <ul class="dropdown-menu">
				<li><a href="myoffers">{{ __('Mes offres') }}</a></li>
        <li><a href="settings">{{ __('Paramètres') }}</a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
	 									 document.getElementById('logout-form').submit();">{{ __('Se déconnecter') }}</a></li>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
				</form>
      </ul>
    </li>
	<!--<li><a class="dropdown-item" href="{{ route('logout') }}"
		 onclick="event.preventDefault();
									 document.getElementById('logout-form').submit();">
			{{ __('Logout') }}
	</a></li>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
	</form>
-->

		<!--	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							{{ Auth::user()->name }}
					</a>

					<div class="dropdown-menu">
							<a class="dropdown-item" href="/offers"
								 >
									{{ __('My posts') }}
							</a>


							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
							</form>
					</div>
			</li> -->


	@endguest

</ul>
<!-- /Main navigation -->
@endsection('NavigationBar')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>


                    @endif

                    {!! Form::open(['url' => 'create/post/add']) !!}
						<div class="form-group">
                                {{Form::label('Titre',"Titre de l'offre")}}
                                {{Form::text('Titre','',['class' => 'form-control' , 'placeholder' => 'Titre' ] )}}
                            <br>
                                {{Form::label('Nombre de personnes','Nombre de colocataires')}}
							    {{Form::text('NombrePersonnes','',['class' => 'form-control' , 'placeholder' => 'Nombre de personnes' ] )}}
                            <br>
                                <fieldset>
								{{Form::label('Description','Description')}}
								{{Form::textarea('Description','',['class' => 'form-control' , 'placeholder' => 'Décrivez votre offre' ] )}}
							</fieldset>
								<br>
                <fieldset>
{{Form::label('Adresse','Adresse')}}
{{Form::textarea('Adresse','',['class' => 'form-control' , 'placeholder' => 'Votre adresse ' ] )}}
</fieldset>
							<div class="text-center">
								<br>
                <button type="submit" style="background-color:#f7c8aa; margin-left: 70px;" class="btn btn">
                    {{ __('Créer Offre') }}
                </button>

							</div>
						</div>

					{!! Form::close() !!}


                </div>

            </div>
        </div>
    </div>

</div>
@endsection
