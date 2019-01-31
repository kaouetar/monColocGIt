@section('title','RentIK')

@section('stylesheet')
<link type="text/css" rel="stylesheet" href="css/style.css" />
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
	<!-- <li><a href="/offers">Offers</a></li> -->

	<li><a href="login">Connexion</a></li>

</ul>
<!-- /Main navigation -->
@endsection('NavigationBar')

@section('HomeContent')
<!-- home content -->
<div class="col-md-10 col-md-offset-1">
	<div class="home-content">
		<h1 class="white-text"><span style="color: #d6916d;">R</span>ent <span style="color: #d6916d;">IK</span></h1>
		<p class="white-text">Vous êtes à la recherche d'un loyer ? Vous l'avez déjà et vous cherchez avec qui le partager ?
			<h3 class="white-text"> Ne cherchez plus, vous êtes au bon endroit. </h3>
		</p>
		<a class="white-btn" href="/register">Inscivez-vous !</a>
	</div>
</div>
<!-- /home content -->
@endsection






@extends('layouts.CSC')
@section('content')

	@include('inc.CSC.about')

@endsection('content')
