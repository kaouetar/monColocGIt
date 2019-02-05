@section('title','RentIK')
@section('headerID','home')

@section('stylesheet')
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script src="{{ asset('js/app.js') }}" defer></script>

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
	<li><a href="#home">Accueil</a></li>
	<li><a href="#about">A propos de nous</a></li>
	<li><a href="">Contact</a></li>

	@guest
	<li><a href="login">Connexion</a></li>
	@else
	<li>
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
	 									 document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
        <li><a href="#">{{ __('My posts') }}</a></li>
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

@section('HomeContent')
<!-- home content -->
<div class="col-md-10 col-md-offset-1">
	<div class="home-content">
		<h1 class="white-text"><span style="color: #d6916d;">R</span>ent <span style="color: #d6916d;">IK</span></h1>
		<p class="white-text">Vous êtes à la recherche d'un loyer? Vous l'avez déjà et vous cherchez avec qui le partager ?
			<h3 class="white-text"> Ne cherchez plus, vous êtes au bon endroit. </h3>
		</p>
		@guest
		<a class="white-btn" href="/register">Inscivez-vous !</a>
		@else
		<a class="white-btn" href="/offers">Consultez nos offres!</a>
		@endguest

	</div>
</div>
<!-- /home content -->
@endsection






@extends('layouts.CSC')
@section('content')

	@include('inc.CSC.about')

@endsection('content')
