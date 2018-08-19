<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      HAKEKO
  </title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!--  Social tags      -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('/css/material-kit.mine8da.css') }}">
    <link rel="stylesheet" href="{{asset('/css/flashy.css') }}">


</head>
<body class="about-us ">
    <div id="app">
        <nav class="navbar    fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('/img/sections/logo-small.png') }}" alt="logo Akeko"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                                  <a href="#pablo" class="nav-link">
                                                      Demande d'ajout
                                                  </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="#pablo" class="nav-link">
                                                     Ecoles
                                                  </a>
                                              </li>
          									<li class="nav-item">
                                                  <a href="#pablo" class="nav-link">
                                                     Nous Connaitre
                                                  </a>
                                              </li>
          									<li class="nav-item">
                                                  <a href="#pablo" class="nav-link">
                                                     Contact
                                                  </a>
                                              </li>
                                            <br/>

                                              <li class="dropdown nav-item">
                                                  <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                                                      <div class="profile-photo-small">
                                                          <img src="{{asset('/img/faces/avatar.jpg') }}" alt="Circle Image" class="rounded-circle img-fluid">
                                                      </div>
                                                  </a>



                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                      @else

                        <div class="dropdown-menu dropdown-menu-right">

                                <h5 class="dropdown-header"><strong> {{ Auth::user()->nom }}</strong></h5>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                 </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                              </li>
                          </ul>
                      </div>
                        @endguest
                  </div>
              </nav>
              <script src="//code.jquery.com/jquery.js"></script>
              @include('flashy::message')
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
