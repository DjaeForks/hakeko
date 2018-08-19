@extends('layouts.contactcorp')

@section('headcontact')
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
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
   <link rel="stylesheet" href="{{asset('/css/material-kit.mine8da.css') }}">


@stop

@section('bodycontact')


<div class="page-header header-filter" style="background-image: url('/img/recuperation.jpg'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-7 col-sm-6 ml-auto mr-auto">
            <div class="card card-signup">
                <div class="card-header card-header-info text-center">

                <strong><font size="4">  {{ __('Contact') }} <strong><font size="4">

                </div>
                <p class="description text-center"><font size= "3"><strong><font color= "#00aec5">Appelez nous au</font> +212 5 22 22 09 09</p>

                <div class="card-body">
                    <form method="POST" action="{{ route('contact') }}" aria-label="{{ __('contact') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="bmd-label-static">{{ __('Adresse email') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-text-danger' : '' }}" name="email" value="{{ old('email') }}" required >

                                @if ($errors->has('email'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email" class="bmd-label-static">{{ __('Nom') }}</label>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-text-danger' : '' }}" name="name" value="{{ old('name') }}" required >

                                    @if ($errors->has('name'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                        <div class="form-group">
                            <label for="prenom" class="bmd-label-static">{{ __('Prénom') }}</label>
                                <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required>

                                @if ($errors->has('prenom'))
                                    <p class="invalid-text-danger" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </p>
                                @endif
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                                <label for="connu_hakeko" class="bmd-label-floating">message</label>
                                <textarea id="message" class="form-control{{ $errors->has('message') ? ' is-text-danger' : '' }}" rows="5"  name="message"></textarea>
                                @if ($errors->has('message'))
                                    <p class="text-danger">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </p>
                                @endif
                            </div>
                          </div>

                        </div>
                        <div class="footer text-right">
                                <button type="submit" class="btn btn-round btn-info">
                                    {{ __('Envoyer') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
