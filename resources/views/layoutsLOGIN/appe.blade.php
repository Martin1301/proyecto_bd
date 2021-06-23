<!DOCTYPE html>
<html lang="en">

<head>
  <title>Qatar clasificatorias 2022</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/fonts/icomoon/style.css">

  <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="/css/jquery-ui.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="/css/aos.css">

  <link rel="stylesheet" href="/css/style.css">

</head>

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html">
              <img src="/images/logo.png" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
          <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
      
                        <li><a href="http://localhost:8000/fechas/show" class="nav-link">Fechas</a></li>
                        <li><a href="http://localhost:8000/posiciones/show" class="nav-link">Posiciones</a></li>
                        <li ><a href="http://localhost:8000/estadisticas/show" class="nav-link">Estadísticas</a></li>
                        <li ><a href="http://localhost:8000/jugadores/show" class="nav-link">Jugadores</a></li>
                        <li >
                        @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                        @endguest
            </nav>

          </div>
        </div>
      </div>

    </header>
<body>

@yield('content')   

</body>

<!-- FOOTER -->
    <footer class="footer-section">
        <div class="row text-center">
    <div class="col-md-12">
      <div class=" pt-6">
        <p>
        
          
          <script>
            document.write(new Date().getFullYear());
          </script> Trabajo Final Base de Datos | Grupo 7B Palian, Ramos, Rojas, Romani 
        </p>
      </div>
    </div>

  </div>
</div>

</footer>
  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>

  


</html>