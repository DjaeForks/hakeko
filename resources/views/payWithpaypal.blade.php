@extends('layouts.payement')

@section('headpayement')
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

@section('bodypayement')


<div class="page-header header-filter" style="background-image: url('/img/recuperation.jpg'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 ml-auto mr-auto">
            <div class="card card-signup">
                <div class="card-header card-header-info text-center">

                <h3>  {{ __('PAYEMENT') }} </h3>

                </div>
                <p class="description text-center">SVP entrez votre email et mot de passe pour se connecter a vote panneau de control</p>

                <div class="card-body">
                    <form class = "w3-conteneur w3-display-middle w3-card-4" method="POST" id="payment-form"
          action="{!! URL::to('paypal') !!}">>
                        @csrf

                        <div class="form-group">
                            <label for="payement" class="bmd-label-static">{{ __('Motant') }}</label>
                                <input id="amount" type="text" class="form-control{{ $errors->has('password') ? ' is-text-danger' : '' }}" name="amount" required>

                                @if ($errors->has('amount'))
                                    <p class="text-danger" role="alert">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="footer text-right">
                                <button type="submit" class="btn btn-round btn-info">
                                    {{ __('Payer avec paypal') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
