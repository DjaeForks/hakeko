@extends('layouts.Corp_postuler')


@section('headpostuler')
   <meta charset="utf-8">
       <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
       <!-- Favicons -->
       <link rel="stylesheet" href="{{asset('/img/apple-icon.png') }}">
       <link rel="icon" href= "{{asset('/img/favicon.png') }}">

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

       <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
       <link rel="stylesheet" href="{{asset('/css/material-kit.mine8da.css') }}">
       <!-- iframe removal -->

@stop

@section('bodypostuler')


<div class="page-header header-filter" style="background-image: url('/img/mesdemandes.jpg'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-7 col-sm-6 ml-auto mr-auto">
            <div class="card card-signup">
                <div class="card-header card-header-info text-center">

                <strong><font size="4">  {{ __('Postuler') }} <strong><font size="4">

                </div>
				<p class="description text-center"><font size= "3"><strong><font color= "#00aec5">Appelez nous au</font> +212 5 22 22 09 09</p>
			  <div class="card-body">
          <form method="POST" action="{{ route ('Postuler') }}" aria-label="{{ __('Postuler') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                        <label for="name" class="bmd-label-floating">{{ __('Nom de l\'établissement') }}</label>
                            <input id="text" type="text" class="form-control{{ $errors->has('name') ? ' is-text-danger' : '' }}" name="name" value="{{ old('name') }}" required >

                            @if ($errors->has('name'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
            </div>

			   <div class="form-group form-file-upload form-file-multiple">
           <label for="name" class="bmd-label-floating">{{ __('Deux derniers relevés') }}</label>
           <input type="file" multiple="" class="inputFileHidden">
        <div class="input-group">
        <input id="File" type="text" class="form-control inputFileVisible {{ $errors->has('f1') ? ' is-text-danger' : '' }}"  name="f1" value="{{ old('f1') }}" required multiple >
        <span class="input-group-btn">
            <button type="button" class="btn btn-fab btn-round btn-info">
                <i class="material-icons">layers</i>
            </button>
        </span>
     </div>

     @if ($errors->has('f1'))
         <span class="text-danger">
             <strong>{{ $errors->first('f1') }}</strong>
         </span>
     @endif

  </div>

			  <div class="form-group form-file-upload form-file-multiple">
          <label for="name" class="bmd-label-floating">{{ __('Deux derniers relevés') }}</label>
                   <input type="file" multiple="" class="inputFileHidden">
                <div class="input-group">
                    <input id="File" type="text" class="form-control inputFileVisible {{ $errors->has('f2') ? ' is-text-danger' : '' }}"  name="f2" value="{{ old('f2') }}" required multiple >

             <span class="input-group-btn">
                   <button type="button" class="btn btn-fab btn-round btn-primary">
                     <i class="material-icons">attach_file</i>
                  </button>
                 </span>
                 </div>
                 @if ($errors->has('f2'))
                     <span class="text-danger">
                         <strong>{{ $errors->first('f2') }}</strong>
                     </span>
                 @endif
              </div>

              <div class="form-group form-file-upload form-file-multiple">
                <label for="name" class="bmd-label-floating">{{ __('Deux derniers relevés') }}</label>
                         <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input id="File" type="text" class="form-control inputFileVisible {{ $errors->has('f3') ? ' is-text-danger' : '' }}"  name="f3" value="{{ old('f3') }}" required multiple >
                   <span class="input-group-btn">
                         <button type="button" class="btn btn-fab btn-round btn-primary">
                           <i class="material-icons">attach_file</i>
                        </button>
                       </span>
                       </div>
                       @if ($errors->has('f3'))
                           <span class="text-danger">
                               <strong>{{ $errors->first('f3') }}</strong>
                           </span>
                       @endif
                    </div>
		      </div>
              <div class="footer text-right">
                    <button type="submit" class="btn btn-round btn-info">
                        Envoyer
                  </button>
              </div>
        </form>

		     </div>
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
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{asset('/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('/js/plugins/nouislider.min.js') }}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{asset('js/plugins/bootstrap-selectpicker.js') }}"></script>
    <!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    <script src="{{asset('/js/plugins/bootstrap-tagsinput.js') }}"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{asset('/js/plugins/jasny-bootstrap.min.js') }}"></script>
    <!--	Plugin for Small Gallery in Product Page -->
    <script src="{{asset('/js/plugins/jquery.flexisel.js') }}"></script>
    <!-- Plugins for presentation and navigation  -->
    <script src="{{asset('/assets-for-demo/js/modernizr.js') }}"></script>
    <script src="{{asset('/assets-for-demo/js/vertical-nav.js') }}"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="{{asset('/js/material-kit.mine8da.js?v=2.0.3') }}"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="{{asset('/assets-for-demo/js/material-kit-demo.js') }}"></script>
    <script>
@stop
