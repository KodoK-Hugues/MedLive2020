<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MEDLIVE</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="/assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="/assets/css/Map-Clean.css">
    <link rel="stylesheet" href="/assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="/assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="/assets/css/Responsive-Youtube-Embed.css">
    <link rel="stylesheet" href="/assets/css/monStyle.css">
    <link rel="stylesheet" href="/assets/css/Video-Responsive-YouTube.css">
</head>
<body class="text-primary" id="page-top">
    <nav class="navbar navbar-light navbar-expand-md shadow navigation-clean-button" style="font-family: Roboto, sans-serif;">
        <div class="container">
        <a href="/welcome"> <img class="navbar-brand" src="/assets/img/logo1.svg" style="width: 100px;margin-right: 34px;margin-left: -5px; alt="logo"></a>
          <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
          </button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="letter-spacing: 0px;margin-right: 8px;">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                      <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">MEDLIVE 2020</a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a class="dropdown-item" role="presentation" href="programme">Programme</a>
                          <a class="dropdown-item" role="presentation" href="comite">Comité</a>
                          <a class="dropdown-item" role="presentation" href="partenaires">Partenaires</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">MED'LIVES</a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a class="dropdown-item" role="presentation" href="lives2019">Lives 2019</a>
                          <a class="dropdown-item" role="presentation" href="lives2018">Lives 2018</a>
                          <a class="dropdown-item" role="presentation" href="lives2017">Lives 2017</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">INFORMATIONS</a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a class="dropdown-item" role="presentation" href="contact">Contact</a>
                          <a class="dropdown-item" role="presentation" href="plan">Plan</a>
                          <a class="dropdown-item" role="presentation" href="hotel">Hôtel</a></div>
                    </li>
                </ul>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
  @include('flash::message')
  @yield('contenu')
            <div class="footer-basic" style="height: 185px;font-family: Roboto, sans-serif;padding-top: 40px;">
                <footer style="height: 106px;">
                    <div class="social">
                      <a href="#"><i class="icon ion-social-instagram"></i></a>
                      <a href="#"><i class="icon ion-social-snapchat"></i></a>
                      <a href="#"><i class="icon ion-social-twitter"></i></a>
                      <a href="#"><i class="icon ion-social-facebook"></i></a>
                    </div>
                    <p class="copyright"style="color: rgb(78,78,78);">MEDLIVE © 2017</p>
                </footer>
            </div>
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="/assets/js/creative.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
      </body>
</html>
