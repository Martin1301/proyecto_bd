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
              <li><a href="http://localhost:8000" class="nav-link">Inicio</a></li>
                <li class="active"><a href="http://localhost:8000/fechas" class="nav-link">Fechas</a></li>
                <li><a href="http://localhost:8000/posiciones" class="nav-link">Posiciones</a></li>
                <li><a href="http://localhost:8000/estadisticas" class="nav-link">Estadísticas</a></li>
                <li><a href="http://localhost:8000/jugadores" class="nav-link">Jugadores</a></li>
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
              <h1 class="text-white">FECHAS</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
            </div>
          </div>
        </div>
      </div>
  
      
      @foreach($fecha->where('idencuentro_paises','1') as $fec)
      
      <div class="container">
      
        <div class="row">
          <div class="col-lg-12">
        
            <div class="d-flex team-vs">
              <span class="score">{{$fec->gol_a}}-{{$fec->gol_b}}</span>
              <div class="team-1 w-50">
                <div class="team-details w-100 text-center">
                <img src="{{asset('images').'/'.$fec->bandera_a}}">
                  <h3>{{$fec->pais_nombre_a }}</h3>
                </div>
                
              </div>
              <div class="team-2 w-50">
                <div class="team-details w-100 text-center">
                  <img src="{{asset('images').'/'.$fec->bandera_b}}"  class="img-fluid">
                  <h3>{{$fec->pais_nombre_b}}</span></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
  
      
      <div class="site-section ">
        <div class="container">
          
          <div class="row mb-5">
            <div class="col-lg-12">
              <div class="widget-next-match">
                <div class="widget-title">
                  <h3>Next Match</h3>
                </div>
                <div class="widget-body mb-3">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo_1.png" alt="Image">
                        <h3>Football League</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="images/logo_2.png" alt="Image">
                        <h3>Soccer</h3>
                      </div>
                    </div>
                  </div>
                </div>
  
                <div class="text-center widget-vs-contents mb-4">
                  <h4>World Cup League</h4>
                  <p class="mb-5">
                    <span class="d-block">December 20th, 2020</span>
                    <span class="d-block">9:30 AM GMT+0</span>
                    <strong class="text-primary">New Euro Arena</strong>
                  </p>
  
                  <div id="date-countdown2" class="pb-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section bg-dark ">
        <div class="container">
          
          <div class="row">
            <div class="col-12 title-section">
              <h2 class="heading">Upcoming Match</h2>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="bg-light p-4 rounded">
                <div class="widget-body">
                    <div class="widget-vs">
                      <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                        <div class="team-1 text-center">
                          <img src="images/logo_1.png" alt="Image">
                          <h3>Football League</h3>
                        </div>
                        <div>
                          <span class="vs"><span>VS</span></span>
                        </div>
                        <div class="team-2 text-center">
                          <img src="images/logo_2.png" alt="Image">
                          <h3>Soccer</h3>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="text-center widget-vs-contents mb-4">
                    <h4>World Cup League</h4>
                    <p class="mb-5">
                      <span class="d-block">December 20th, 2020</span>
                      <span class="d-block">9:30 AM GMT+0</span>
                      <strong class="text-primary">New Euro Arena</strong>
                    </p>
  
                  </div>
                
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="bg-light p-4 rounded">
                <div class="widget-body">
                    <div class="widget-vs">
                      <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                        <div class="team-1 text-center">
                          <img src="images/logo_3.png" alt="Image">
                          <h3>Football League</h3>
                        </div>
                        <div>
                          <span class="vs"><span>VS</span></span>
                        </div>
                        <div class="team-2 text-center">
                          <img src="images/logo_4.png" alt="Image">
                          <h3>Soccer</h3>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="text-center widget-vs-contents mb-4">
                    <h4>World Cup League</h4>
                    <p class="mb-5">
                      <span class="d-block">December 20th, 2020</span>
                      <span class="d-block">9:30 AM GMT+0</span>
                      <strong class="text-primary">New Euro Arena</strong>
                    </p>
  
                  </div>
                
              </div>
            </div>
  
            <div class="col-lg-6 mb-4">
              <div class="bg-light p-4 rounded">
                <div class="widget-body">
                    <div class="widget-vs">
                      <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                        <div class="team-1 text-center">
                          <img src="images/logo_1.png" alt="Image">
                          <h3>Football League</h3>
                        </div>
                        <div>
                          <span class="vs"><span>VS</span></span>
                        </div>
                        <div class="team-2 text-center">
                          <img src="images/logo_2.png" alt="Image">
                          <h3>Soccer</h3>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="text-center widget-vs-contents mb-4">
                    <h4>World Cup League</h4>
                    <p class="mb-5">
                      <span class="d-block">December 20th, 2020</span>
                      <span class="d-block">9:30 AM GMT+0</span>
                      <strong class="text-primary">New Euro Arena</strong>
                    </p>
  
                  </div>
                
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="bg-light p-4 rounded">
                <div class="widget-body">
                    <div class="widget-vs">
                      <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                        <div class="team-1 text-center">
                          <img src="images/logo_3.png" alt="Image">
                          <h3>Football League</h3>
                        </div>
                        <div>
                          <span class="vs"><span>VS</span></span>
                        </div>
                        <div class="team-2 text-center">
                          <img src="images/logo_4.png" alt="Image">
                          <h3>Soccer</h3>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="text-center widget-vs-contents mb-4">
                    <h4>World Cup League</h4>
                    <p class="mb-5">
                      <span class="d-block">December 20th, 2020</span>
                      <span class="d-block">9:30 AM GMT+0</span>
                      <strong class="text-primary">New Euro Arena</strong>
                    </p>
  
                  </div>
                
              </div>
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
                    <th>Fecha</th>
                    <th>Local</th>
                    <th colspan="2">Goles</th>
                    <th>Visitante</th>
                    <th>Sede</th>
                  </tr>
                </thead>
                <tbody class="martin">
                @foreach($fecha as $fec)
                <tr>
                <td>{{$fec->fecha_encuentro_paises}}</td>
                <td>{{$fec->pais_nombre_a }}</td>
                <td>{{$fec->gol_a}}</td>
                <td>{{$fec->gol_b}}</td>
                <td>{{$fec->pais_nombre_b}}</td>
                <td>{{$fec->sede_nombre }}</td>
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