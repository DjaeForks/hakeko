@extends('Layouts.traimentsavoirplus')


@section('headertraimentsavoirplus')
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Favicons -->
<link rel="apple-touch-icon" href="{{asset('/img/apple-icon.png') }}">
<link rel="icon" href="{{asset('/img/favicon.png') }}">
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
@stop

@section('bodytraimentsavoirplus')
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/img/bg0.jpg');">
       <div class="container">
           <div class="row">
               <div class="col-md-8 ml-auto mr-auto text-center">
                   <h1 class="title"><font size="6">UIR: Université Internationale de Rabat</font></h1>
               </div>
           </div>
       </div>
   </div>
   <div class="main main-raised">
       <div class="container">
           <div class="UIR: Université Internationale de Rabat-description text-center">
           </div>
           <div class="about-office">
               <div class="section text-center" >

               <div class="row">
                   <div class="col-md-8 ml-auto mr-auto">
                       <h2 class="title"><font size="6">Qui sommes nous</font></h2>
                   </div>
               </div>
               <div class="col-md-10 ml-auto mr-auto text-center">
                   <div class="row">
                      <div align="justify">
                         <p>La startup Hakeko cible la communauté estudiantine subsaharienne au Maroc. C'est une plateforme qui vise à fournir le maximum d'informations aux parents et aux étudiants qui désirent venir poursuivre les études supérieures au Maroc. Fondée par Abdoulanziz ADINANE (comorien), Hakeko va réunir l'ensemble des besoins des étudiants dans une seule plateforme pour leur permettre d'accéder rapidement aux informations dont ils ont besoin (écoles privées, universités…). «L'objectif est de faciliter l'intégration des étudiants subsahariens au Maroc. Quand ils viennent ici, ils sont souvent livrés à eux-mêmes, et sans information. J'ai mon équipe de développeurs qui est entrain la phase de prototypage. Je compte lancer la plateforme au Maroc dans un premier temps. Mais mon objectif à long terme est de l'étendre à toute l'Afrique », explique Abdoulanziz ADINANE. Le fondateur de la startup Hakeko visent des partenariats avec plusieurs structures et entreprises marocaines telles que Royal Air Maroc (RAM). En quête de fonds pour réussir le lancement du projet, la startup se fait accompagner par la Factory (ScreenDy). «Le développement de la plateforme nécessite des investissements lourds », note Abdoulanziz ADINANE. L'autre défi de Hakeko est de pouvoir garantir à tous les étudiants qui auront recours à la plateforme d'intégrer des écoles ou universités de qualité et d'avoir des diplômes certifiés et reconnus par l’Etat. Pour ce faire, le fondateur entend nouer des partenariats avec des écoles qualifiées et accréditées. De même, Hakeko va nouer un partenariat avec le ministère marocaine de l'Education et l'Agence Marocaine pour la Coopération Internationale (AMCI). Le fondateur envisage également de mettre à contribution les différentes ambassades des pays subsahariens au Maroc pour booster la confiance de la plateforme.
                         </p>
                    </div>
                   </div>
               </div>
           </div>
               <div class="row">
                   <div class="col-md-4">
                       <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{asset('/img/examples/office2.jpg') }}">

                   </div>
                   <div class="col-md-4">
                       <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{asset('/img/examples/office4.jpg') }}">
                   </div>
                   <div class="col-md-4">
                       <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{asset('/img/examples/office3.jpg') }}">
                   </div>
                   <div class="col-md-6">
                       <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{asset('/img/examples/office5.jpg') }}">
                   </div>
                   <div class="col-md-6">
                       <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{asset('/img/examples/office1.jpg') }}">
                   </div>
               </div>

              <div class="row" align="center">

                   <div class=" col-md-12 float-center" >

                       <button type="button" class="btn btn-xs btn-round btn-info espace btn col-3">Contact</button>
                       <button type="button" class="btn btn-info btn-round btn btn-success espace btn col-3">Postulé</button >
                        <br/><br/>
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
@stop
