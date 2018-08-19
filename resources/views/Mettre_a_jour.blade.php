@extends('Layouts.pageconnexion')

@section('headcox')

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Favicons -->
<link rel="apple-touch-icon" href="{{asset('/img/apple-icon.png') }}">
<link rel="icon" href="{{asset('/img/favicon.png') }}">
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{asset('/css/material-kit.mine8da.css') }}">

  <script type="text/javascript">
      if (document.readyState === 'complete') {
          if (window.location != window.parent.location) {
              const elements = document.getElementsByClassName("iframe-extern");
              while (elemnts.lenght > 0) elements[0].remove();
              // $(".iframe-extern").remove();
          }
      };
  </script>


@stop

@section('bodycox')

<div class="page-header header-filter" style="background-image: url('/img/recuperation.jpg' ); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                <div class="card card-signup">
                        <div class="card-header card-header-info text-center">
                            <h3 class="card-title">Mot de passe</h3>

                        </div>
                        <p class="description text-center">Mettre à jour votre mot de passe</p>
                        <div class="card-body">
                       <form action="" method="POST">
                                       {{csrf_field() }}

                              <div class="form-group">
                                <label for="password" class="bmd-label-static">Nouveau mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password">
                                @if($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                              </div>
                              <div class="form-group">
                                <label for="password" class="bmd-label-static">Mot de passe (confirmation)</label>
                                <input type="password" class="form-control" id="password" name="password_confirmation">
                                @if($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                              </div>
                        </div>
                        <div class="footer text-center">
                            <input type="submit" class="btn btn-round btn-info" value="Modification mot de passe">
                        </div>
              </form>

                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{asset('/js/core/jquery.min.js') }}"></script>

    <script src="{{asset('/js/core/popper.min.js') }}"></script>
    <script src="{{asset('/js/bootstrap-material-design.min.js') }}"></script>
    <!--  Google Maps Plugin  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="{{asset('/js/plugins/moment.min.js') }}"></script>
    <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{asset('/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('/js/plugins/nouislider.min.js') }}"></script>
    <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{asset('/js/plugins/bootstrap-selectpicker.js') }}"></script>
    <!--  Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    <script src="{{asset('/js/plugins/bootstrap-tagsinput.js') }}"></script>
    <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{asset('/js/plugins/jasny-bootstrap.min.js') }}"></script>
    <!--  Plugin for Small Gallery in Product Page -->
    <script src="{{asset('/js/plugins/jquery.flexisel.js') }}"></script>
    <!-- Plugins for presentation and navigation  -->
    <script src="{{asset('/assets-for-demo/js/modernizr.js') }}"></script>
    <script src="{{asset('/assets-for-demo/js/vertical-nav.js') }}"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="{{asset('/js/material-kit.mine8da.js?v=2.0.3') }}"></script>

    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="{{asset('/assets-for-demo/js/material-kit-demo.js') }}"></script>
    <!-- Sharrre libray -->
    <script src="{{asset('/assets-for-demo/js/jquery.sharrre.js') }}"></script>
    <!-- <script src="assets/js/jquery.youtubebackground.js"></script> -->


<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
  <div class="col-md-8 ml-auto mr-auto text-center">
            <h4 class="title" id="defaultModalLabel">Pour accedez à cette onglet vous deviez d'abord etre connecté </h4>
  </div>
  </div>
        <div class="modal-footer">
          <a href="#dernieres-nouvelles"><font color="#00bcd4">Inscription</a></font>
    <a href="#dernieres-nouvelles"><font color="#00bcd4">Connexion</a></font>

        </div>
    </div>
</div>
</div>

<!-- End-->


@stop
