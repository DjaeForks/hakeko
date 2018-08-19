@extends('layouts.nousconnaitret')
@section('headconnaitre')
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
@section('bodyconnaitre')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('/img/examples/city.jpg');">

  <div class="container">
      <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
              <h1 class="title"><font size="6">Nous connaitre</font></h1>
          </div>
      </div>
  </div>

</div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">

                                <img src="{{asset('/img/faces/abdoulanziz.jpg') }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title"><font size="4.5">Abdoulanziz Adinane</font ></br>
                                <small> CEO</small>
							           	</h3>

                        </div>
                    </div>
                </div>

		    </div>

              <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto" align="center">
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




     <div class="projects-1" id="projects-1" style="background-color: #ccc">

          <div class="container">
            <div class="row">
              <div class="col-md-10 ml-auto mr-auto text-center">
                <h2 class="title"><font size="6">Notre Mission</font></h2>
				<br/>
                <ul class="nav nav-pills nav-pills-info">

                    <li class="nav-item">
                        <a class="nav-link active" href="#dashboard-1" data-toggle="tab">
                             Formation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#schedule-1" data-toggle="tab">
                             Accompagnement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tasks-1" data-toggle="tab">
                             Administration
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#tasks-2" data-toggle="tab">
                             Association
                        </a>
                    </li>
                </ul>

                <div class="tab-content tab-space ">
                    <div class="tab-pane active" id="dashboard-1">
                      <h3 class="title"><font size="5">Orientation & Choix de Formation</font></h3>

                      <p class="lead">HAKEKO vous oriente et vous conseil dans la recherche de votre formation. </p>
					  <div align="justify">
                      <p>Durant votre recherche de formation HAKEKO vous mettra en contact avec un conseiller pédagogique afin de vous aider à trouve la formation qui vous convient selon votre niveau d’étude, la série de votre Bac ou encore de vos préférences en terme de filières d’études.
                      Hakeko garantie à tous les étudiants qui auront recours à la plateforme d’intégrer des écoles ou universités de qualité et d’avoir des diplômes certifiés reconnus par l’Etat.
                      </p>
                    </div>
					</div>
                    <div class="tab-pane" id="schedule-1">
                      <h3 class="title"><font size="5">Un Accompagnement unique</font></h3>

                      <p class="lead">HAKEKO vous accompagne pour une intégration réussie </p>
					  <div align="justify">
                      <p>Hakeko propose à l'étudiant une palette de services complémentaires, personnalisés grâce à des partenarriats avec les entreprises concernées.
                      Grace à nos nombreux partenariats HAKEKO répond à vos besoins principaux en matière de logement soit en colocation ou en résidences universitaires, vous met en relation avec votre Ambassade pour toutes vos questions de documentation de séjour, des offres bancaires pour la gestion et la sécurité de vos fonds et bien plus encore, avec HAKEKO, HAKUNA MATATA.
                      </p>
                    </div>
					</div>
                    <div class="tab-pane" id="tasks-1">

                      <h3 class="title"><font size="5">HAKEKO vous donne les bonnes informations</font></h3>

                      <p class="lead">Nous vous donnons des informations fiables pour vos démarches </p>
					  <div align="justify">
                      <p>Hakeko facilite cette phase en fournissant des informations fiables et permet la demande en ligne des principaux documents administratifs, en lien avec votre Ambassade vous pourrez effectuer vos demandes de document avant votre arrivée sur place.
                      Nous vos donnerons d'autres informations suplémentaires selon votre besoins ou à la demande afin de vous donnez toutes les clés d'une belle intégration sans soucis, Hakuna Matata
                      </p>
					 </div>
                    </div>
                    <div class="tab-pane" id="tasks-2">
                      <h3 class="title"><font size="5">Intégrer des Associations Estudiantines</font></h3>
                      <p class="lead">HAKEKO vous intègre automatiquement auprès des associations de chaque pays </p>
					  <div align="justify">
                      <p>Les associations éstudiantines organisent des voyages d'intégrations pour renforcer les liens de fraternité et vous faire découvrir la culture et les sites touristiques du pays.
                      HAKEKO grâce aux associations estudiantines vous intègre dans une grande famille, le tous dans un esprit de panafricanisme l'objectif étant que tout africain se sente partout chez lui.
                      </p>
                    </div>
					</div>
                </div>


              </div>
            </div>
            </div>


        </div>


        <!--     *********     FEATURES 3      *********      -->
       <div class="features-3" style="background-color: #343434">
            <div class="row container">
                <div class="col-md-6">
                    <div class="phone-container">
                        <img src="{{asset('/img/sections/iphone.png')}}"alt="procédure">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="title"><font color="#FAFAFA">Votre integration</font></h2>
                    <div class="info info-horizontal">
                        <div class="icon icon-info">
                            <i class="material-icons">library_books</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"><font color="#FAFAFA">Inscription sur la plateforme</font></h4>
                            <p>Inscrivez vous sur notre plateforme et commencez votre intégration </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-info">
                            <i class="material-icons">lightbulb_outline</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"><font color="#FAFAFA">Solution à vos besoins</font></h4>
                            <p>Ecoles pour la formation, Logement, Ambassade pour les documents, Compagnies aérienne pour le billet et les Banques pour la sécurité et la gestion de votre argent. </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-info">
                            <i class="material-icons">euro_symbol</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"><font color="#FAFAFA">Paiements des différents frais</font></h4>
                            <p>Payez les différents frais engagés, formation, logement, billet d'avion. Enfin, nous vous Acceuillerons à l'aéroport à votre arrivée </p>
                        </div>
                    </div>
                </div>
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
