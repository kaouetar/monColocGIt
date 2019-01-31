@section('title','Offres de colocation')

@section('stylesheet')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/offerstyle.css" />

@endsection('stylesheet')

@section('Background')
<!-- Background Image -->

<!-- /Background Image -->
@endsection('Background')

@section('NavigationBar')
		<!--  Main navigation  -->
    <ul class="main-nav nav navbar-nav navbar-right" style="margin-left:50px;">
    	<li><a href="#home">Accueil</a></li>
    	<li><a href="#about">A propos de nous</a></li>
    	<li><a href="">Contact</a></li>
    	<li><a href="/offers">Offers</a></li>
    	<!-- <li><a href="#portfolio">Evenements</a></li>
    	<li><a href="#service">Services</a></li>
    	<li><a href="#joinus">Nous Rejoindre</a></li>
    	<li><a href="login">Espace Membre</a></li>
    	<li><a style="color:tomato;"href="Ensat_CD"><span >Ensat Coding Challenge</span></a></li>
    	-->
    	<li><a href="login">Connexion</a></li>

    </ul>
		<!-- /Main navigation -->
@endsection('NavigationBar')
@extends('layouts.CSC')

@section('content')
<h4 class="heading">Trending this month</h4>
  {{-- @foreach($data as $article) --}}
<div class="job-listing job-listing--featured ">
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <div class="row">
                <div class="col-2"><img src="https://d19m59y37dris4.cloudfront.net/jobs/2-0-1/img/company-1.png" alt="LoremIpsum " class="img-fluid"></div>
                <div class="col-10">
                  <h4 class="job__title"><a href="detail.html">Title</a></h4>
                  <p class="job__company">

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-10 col-md-3 col-lg-2 ml-auto"><i class="fa fa-map-marker job__location"></i>San Francisco</div>
            <div class="col-10 col-md-3 col-lg-3 ml-auto">
              <span class="auteur">Par $auteur, le $date</span>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
  {{-- @endforeach --}}
    </div>
@endsection('content')
