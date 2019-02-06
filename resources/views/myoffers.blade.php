@section('title','RentIK')


@section('stylesheet')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>My offers</title>
  @endsection
  @section('NavigationBar')
  <!--  Main navigation  -->
  <ul class="main-nav nav navbar-nav navbar-right" style="margin-left:50px;">
  	<li><a href="#home">Accueil</a></li>
  	<li><a href="#about">A propos de nous</a></li>
  	<li><a href="">Contact</a></li>


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
  @section('content')
<div class="main">
  <div class="container" style="margin: auto;">
    <div class="row">
          <div class="col-md-6">
             <div class="card border-primary flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                   <strong class="d-inline-block mb-2 text-primary">World</strong>
                   <h6 class="mb-0">
                      <a class="text-dark" href="#">40 Percent of People Can’t Afford Basics</a>
                   </h6>
                   <div class="mb-1 text-muted small">Nov 12</div>
                   <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                   <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
             </div>
          </div>
          <div class="col-md-6">
             <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                   <strong class="d-inline-block mb-2 text-success">Health</strong>
                   <h6 class="mb-0">
                      <a class="text-dark" href="#">Food for Thought: Diet and Brain Health</a>
                   </h6>
                   <div class="mb-1 text-muted small">Nov 11</div>
                   <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                   <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
             </div>
          </div>
       </div>
  </div>
</div>
@endsection ('content')
