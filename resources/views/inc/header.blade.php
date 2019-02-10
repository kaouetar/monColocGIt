@section('header')
<!-- Header -->
<header id="@yield('headerID')">

@yield('Background')
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

  @yield('NavigationBar')

    </div>
  </nav>
  <!-- /Nav -->
  <div class="home-wrapper">
    <div class="container">
      <div class="row">

        @yield('HomeContent')

      </div>
    </div>
  </div>
</header>
<!-- /Header -->
