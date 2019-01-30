

@section('title','ENSAT CODING CHALLENGE V2.0')
@section('stylesheet')
<link type="text/css" rel="stylesheet" href="css/styleCPC.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="tools/animate/animate.css">
<link rel="stylesheet" type="text/css" href="tools/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="tools/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
@endsection('stylesheet')

@section('Background')
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/ensat_coding.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->
@endsection('Background')

@section('NavigationBar')
		<!--  Main navigation  -->
		<ul class="main-nav nav navbar-nav navbar-right">
			<li><a href="#home">Home</a></li>
			<li><a href="#Statistiques">Statistiques</a></li>
			<li><a href="#InscriptionComp">Inscription A La Competition</a></li>
			<li><a href="#ListeEquipes">Liste Des Equipes</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a style="color: #6195FF;"href="/"><span>Computer Science Club</span></a></li>
		</ul>
		<!-- /Main navigation -->
@endsection('NavigationBar')


@section('HomeContent')
<!-- home content -->
<div class="col-md-10 col-md-offset-1">
	<div class="home-content">
		<h1 class="white-text"><span style="color:tomato ;">E</span>NSAT <span style="color:tomato ;">C</span>ODING <span style="color:tomato ;">C</span>HALLENGE <span style="color:tomato;" > V2.0</span></h1>
		<p class="white-text">L'ENSAT CODING CHALLENGE, Une occasion annuelle pour tous les étudiants Marocain de fortifier leur capacité
			à résoudres tous types de problèmes algorithmiques, c'est aussi une occasion de rencontre entre les jeunes intéressé spar le domaine de L'Informatique
			. Rejoignez-Nous dans ce monde plein de plaisir, de fun, et de défi!


		</p>
		<a class="white-btn" href="#Statistiques">Allons-y!</a>
	</div>
</div>
<!-- /home content -->
@endsection

@extends('layouts.CSC')
@section('content')
	@include('inc.ECC.Statistiques')
	@include('inc.ECC.InscriptionCompetition')
	@include('inc.ECC.ListeEquipes')

	@include('inc.ECC.contactus')



	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->


@endsection('content')
