<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
  <link rel="icon" type="image/png" href="favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>@yield('title')</title>


  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/paper-kit.css" rel="stylesheet" />
  

</head>

<body>



 <!-- Navbar MENU -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand"href="{{url('/')}}" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom">
            etc line games
          </a>
          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#Eventos" class="nav-link"><i class="nc-icon nc-controller-modern"></i> Juegos</a>
            </li>
            <li class="nav-item">
              <a href="#Eventos" class="nav-link"><i class="nc-icon nc-trophy"></i> TORNEOS</a>
            </li>
          
            <li class="nav-item">
              <a href="#Eventos" class="nav-link"><i class="nc-icon nc-layout-11"></i> Eventos</a>
            </li>
        

            <li class="nav-item">
              
                <a class="btn btn-danger btn-round" href="{{url('register-page')}}" >Iniciar Session</a>
  
            </li>
            
          </ul>
        </div>
      </div>
    </nav>



 
  @yield('content')


  <!-- FOOTER -->
  <footer class="footer   footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
            </li>
            
            <li>
              <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
          </span>
        </div>
      </div>
    </div>
  </footer>

    <!--  JS Files   -->
  <script src="js/paper-kit.js"></script>


</body>

</html>