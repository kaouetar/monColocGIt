<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>

      {{ config('Blog', 'RentIK') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('myCss')
<style media="screen">

li a:hover {
font-size: 110%;

}
</style>
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-image:url('/images/Capture.png');">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('Home', 'Home') }} --}}
                    <img class="logo" src="images\icons\icons8_Home_35px.png" width="30" alt="logo">
                </a>



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item"><a class="nav-link" style="color: white;margin-right:10px;"href="/#home">Accueil</a></li>

                      	<li class="nav-item"><a class="nav-link" style="color: white;margin-right:10px;"href="/#about">A propos de nous</a></li>

                      	<li class="nav-item"><a class="nav-link" style="color: white;margin-right:10px;"href="/#contact">Contact</a></li>


                      	<li class="nav-item"><a class="nav-link" style="color: white;margin-right:10px;"href="/offers">Offres Disponibles</a></li>

                            <li class="nav-item dropdown">
                                <a style="color: white; "id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="margin-top:50px;">
            @yield('content')

        </main>

    </div>


</body>
</html>
