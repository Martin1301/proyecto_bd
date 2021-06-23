<!DOCTYPE html>
<html lang="en">

<head>
  <title>Qatar clasificatorias 2022</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

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
              <img src="images/logo.png" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li ><a href="http://localhost:8000" class="nav-link">Inicio</a></li>
                <li><a href="http://localhost:8000/fechas" class="nav-link">Fechas</a></li>
                <li><a href="http://localhost:8000/posiciones" class="nav-link">Posiciones</a></li>
                <li class="active"><a href="http://localhost:8000/estadisticas" class="nav-link">Estadísticas</a></li>
                <li ><a href="http://localhost:8000/jugadores" class="nav-link">Jugadores</a></li>
                <li><a href="http://localhost:8000/login" class="nav-link">Log</a></li>
              </ul>
            </nav>

            <a href="#"
              class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

<body>

  <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mx-auto text-center">
          <h1 class="text-white">ESTADÍSTICAS</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
        </div>
      </div>
    </div>
  </div>

    <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">Our Blog</h2>
        </div>
      </div>
      <div class="row">
        
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


  <div class="site-section bg-dark">
    <div class="container">
          <div class="widget-next-match">
            <table class="table custom-table text-center">
            <thead>

<tr>

  <th>Pais</th>
  <th>Jugador</th>
  <th>Amarilla</th>
  <th>Roja</th>

</tr>

</thead>


<tbody>
@foreach($estadisticas as $est)
<tr>

<td>{{$est->pais_nombre}}</td>
<td>{{$est->jugador_nombre_jugador}}</td>
<td>{{$est->amarilla }}</td>
<td>{{$est->roja}}</td>

 </tr>
    @endforeach
  </tbody>    
            </table>
          </div>

        </div>
      </div>
    </div>
    
  </div> <!-- .site-section -->


<!-- FOOTER -->
    <footer class="footer-section">
        <div class="row text-center">
    <div class="col-md-12">
      <div class=" pt-5">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made with <i class="icon-heart"
            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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

</body>

</html>