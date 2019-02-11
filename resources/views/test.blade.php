<!DOCTYPE html>
<html lang="en" class=" js no-mobile desktop no-ie chrome chrome71 root-section gradient rgba opacity textshadow multiplebgs boxshadow borderimage borderradius cssreflections csstransforms csstransitions no-touch retina fontface domloaded w-262 gt-240 lt-320 lt-480 lt-640 lt-768 lt-800 lt-1024 lt-1280 lt-1440 lt-1680 lt-1920 portrait no-landscape" id="offers-page"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>RentIK</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="/css/owl.carousel.css">
	<link type="text/css" rel="stylesheet" href="/css/owl.theme.default.css">

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="/css/magnific-popup.css">

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css">
<script src="http://127.0.0.2/js/app.js" defer=""></script>
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
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<!-- Header -->
<header id="">

<!-- Background Image -->
	<div class="bg-img" style="background-image: url('https://blog.appartager.com/wp-content/uploads/2013/11/Trousseau-de-cl%C3%A9s-740x357.jpg');">
	<div class="overlay"></div>
</div>
<!-- /Background Image -->
  <!-- Nav -->
  <nav id="nav" class="navbar nav-transparent">
    <div class="container">

      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
          <a href="/">
            <img class="logo-alt" src="\images\icons\icons8_Home_35px.png" alt="logo">
            <img class="logo" src="\images\icons\icons8_Home_35px.png" alt="logo">
          </a>
        </div>
        <!-- /Logo -->

        <!-- Collapse nav button -->
        <div class="nav-collapse">
          <span></span>
        </div>
        <!-- /Collapse nav button -->
      </div>

  <!--  Main navigation  -->
<ul class="main-nav nav navbar-nav navbar-right" style="margin-left:50px;">
	<li><a href="/">Accueil</a></li>
	<li><a href="/#about">A propos de nous</a></li>
	<li><a href="/#contact">Contact</a></li>

		<li class="active"><a href="#offers">Offres Disponibles</a></li>

	<li>
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">kaouetar <span class="caret"></span></a>
      <ul class="dropdown-menu">
				<li><a href="/myoffers">Mes offres</a></li>
        <li><a href="/profile/7">Profil</a></li>
        <li><a href="/chat">Messages</a></li>

        <li><a href="http://127.0.0.2/logout" onclick="event.preventDefault();
	 									 document.getElementById('logout-form').submit();">Se déconnecter</a></li>
				<form id="logout-form" action="http://127.0.0.2/logout" method="POST" style="display: none;">
						<input type="hidden" name="_token" value="sMSKBTGSQciyMqRiUD0iP51VBIer908PFWOcGHbs">				</form>
      </ul>
    </li>
	<!--<li><a class="dropdown-item" href="http://127.0.0.2/logout"
		 onclick="event.preventDefault();
									 document.getElementById('logout-form').submit();">
			Logout
	</a></li>
	<form id="logout-form" action="http://127.0.0.2/logout" method="POST" style="display: none;">
			<input type="hidden" name="_token" value="sMSKBTGSQciyMqRiUD0iP51VBIer908PFWOcGHbs">	</form>
-->

		<!--	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							kaouetar
					</a>

					<div class="dropdown-menu">
							<a class="dropdown-item" href="/offers"
								 >
									My posts
							</a>


							<form id="logout-form" action="http://127.0.0.2/logout" method="POST" style="display: none;">
									<input type="hidden" name="_token" value="sMSKBTGSQciyMqRiUD0iP51VBIer908PFWOcGHbs">							</form>
					</div>
			</li> -->



</ul>
<!-- /Main navigation -->

    </div>
  </nav>
  <!-- /Nav -->
  <div class="home-wrapper">
    <div class="container">
      <div class="row">


<!-- /home content -->

      </div>
    </div>
  </div>
</header>
<!-- /Header -->

<!-- About -->
<main class="py-4" style="margin-top:50px;">
    @yield('content')

</main>
<!-- /About -->


<!-- Back to top -->
<div id="back-to-top"></div>
<!-- /Back to top -->

<!-- Preloader -->
<div id="preloader" style="display: none;">
  <div class="preloader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<!-- /Preloader -->

<!-- jQuery Plugins -->
<script src="/tools/jquery/jquery-3.2.1.min.js"></script>
<script src="/tools/bootstrap/js/popper.js"></script>
<script src="/tools/select2/select2.min.js"></script>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script src="/tools/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
  $('.js-pscroll').each(function(){
    var ps = new PerfectScrollbar(this);

    $(window).on('resize', function(){
      ps.update();
    })
  });


</script>

<!-- Footer -->
<footer id="footer" class="sm-padding bg-dark">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <div class="col-md-12">

        <!-- footer logo -->

        <!-- /footer logo -->

        <!-- footer follow -->
        <ul class="footer-follow">
          <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
          <li>Suivez-nous</li>
          <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
        <!-- /footer follow -->

        <!-- footer copyright -->
        <div class="footer-copyright">
          <p>Copyright © RentIK 2019. All Rights Reserved.</p>


        </div>
        <!-- /footer copyright -->

      </div>

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</footer>
<!-- /Footer -->



</body>
</html>
