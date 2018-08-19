@extends('Layouts.Accueil')


@section('header')
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


<script type="text/javascript">
    if (document.readyState === 'complete') {
        if (window.location != window.parent.location) {
            const elements = document.getElementsByClassName("iframe-extern");
            while (elemnts.lenght > 0) elements[0].remove();
            // $(".iframe-extern").remove();
      {
    };
</script>

<style>
body {
  overflow-y: scroll;
overflow-x: hidden;
}

.vcenter {
display: inline-block;
vertical-align: middle;
float: none;
}
.video-container {
  position: relative;
  padding-bottom: 56.25%;
  padding-top: 30px; height: 0; overflow: hidden;
  }

  .video-container iframe,
  .video-container object,
  .video-container embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  }


  .open_modal_video i {
    color: #fff;
    font-size: 80px;
  }
  .transparent_btn {
    background-color: transparent !important;
    color: #ccc;
    border: 1px solid #fff;

  }
  .transparent_btn:hover {
    color: #ccc !important;
  }
</style>
@stop

@section('body')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('/img/bg_students.jpg' )">
  <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="title">DECOUVRIRE</h2>
                <a href="#" data-toggle="modal" data-target="#myModal" class="open_modal_video"><i class="material-icons">play_circle_outline</i></a>
                <br/><br/>
                <a href="#" class="btn btn-round btn-raised transparent_btn btn_create_account">
                  Creer un compte
                </a>
            </div>
        </div>
    </div>
  <!-- <div class="afficher_video">


        <h2 class="title text-center text-white">Comment utiliser l application?</h2>
        <a href="#" data-toggle="modal" data-target="#myModal" class="open_modal_video"><i class="material-icons">play_circle_outline</i></a>
        <a href="#" class="btn btn-round btn-raised transparent_btn btn_create_account">
          Creer un compte
        </a>
  </div> -->
</div>


<!-- Classic Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Video de presentation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <div class="modal-body">
                <div class="video-container">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->

<div class="main main-raised">



<div class="container">


   <!-- debut-->
   <div class="container">
        <div class="section">
           <p class="h3 title text-center">LES  PLUS VISITEES</p>
           <u></u>
            <br>
            <div class="row" align="center">
             <div class="col-md-4" >
            <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="{{asset('/img/bg5.jpg') }}" alt="Card image cap">
                      <div class="card-body">
                        <div class="pw_content">
                                <div class="pw_header">
                                    <h6>Université Mohamed VI</h6>
                                    <small class="text-muted">Master Gestion & Finance</small>
                                </div>
                    <div class="pw_meta">

                                    <span>Côut Annuel: 50 000Dhs</span>
                      <div align="justify">
                            <p class="card-description">
                            Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.</br>
                            <a href="#pablo"><font color="#00bcd4"> Ensavoir plus</font></a>
                           </p>
                      </div>
                   </div>
                         </div>
                    <div class="row " align="center">
                           <div class="col-lg-12 auto">
                                  <button type="button" class="btn btn-xs btn-round btn-info espace btn col-5">Contact</button>
                                  <button type="button" class="btn btn-info btn-round btn btn-success espace btn col-5">Postulé</button >
                          </div>
                     </div>
                      </div>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="{{asset('/img/examples/blog5.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                              <div class="pw_content">
                                      <div class="pw_header">
                                          <h6>Université Mohamed VI</h6>
                                          <small class="text-muted">Master Gestion & Finance</small>
                                      </div>
                                      <div class="pw_meta">

                                          <span>Côut Annuel: 50 000Dhs</span>
                     <div align="justify">
                                  <p class="card-description">
                                  Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.</br>
                                  <a href="#pablo"><font color="#00bcd4"> Ensavoir plus</font></a>
                                 </p>
                                      </div>
                    </div>
                               </div>
                <div class="row " align="center">
                                 <div class="col-lg-12 auto">
                                        <button type="button" class="btn btn-xs btn-round btn-info espace btn col-5">Contact</button>
                                        <button type="button" class="btn btn-info btn-round btn btn-success espace btn col-5">Postulé</button >
                                </div>
                           </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                   <div class="card" style="width: 20rem;">
                           <img class="card-img-top" src="{{asset('/img/examples/blog6.jpg') }}" alt="Card image cap">
                             <div class="card-body">
                               <div class="pw_content">
                                       <div class="pw_header">
                                           <h6>Université Mohamed VI</h6>
                                           <small class="text-muted">Master Gestion & Finance</small>
                                       </div>
                                       <div class="pw_meta">

                                           <span>Côut Annuel: 50 000Dhs</span>
                      <div align="justify">
                                   <p class="card-description">
                                   Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.</br>
                                   <a href="#pablo"><font color="#00bcd4"> Ensavoir plus</font></a>
                                  </p>
                                       </div>
                     </div>
                                </div>
                 <div class="row " align="center">
                                  <div class="col-lg-12 auto">
                                         <button type="button" class="btn btn-xs btn-round btn-info espace btn col-5">Contact</button>
                                         <button type="button" class="btn btn-info btn-round btn btn-success espace btn col-5">Postulé</button >
                                 </div>
                            </div>
                             </div>
                         </div>
                         </div>


        </div>
        </div>
        </div>


<!--div class="section text-center">

            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Les Avantages de la plateforme</h2>
                    <h5 class="description">Hakeko est une plateforme qui vise à integrer les étudiants qui desirent poursuivre leurs etudes superieurs a l'etrange, avec multiples avantages tel que: </h5>
  </div>
            </div>
            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">insert_emoticon</i>
                            </div>
                            <h4 class="info-title">Simple</h4>
                            <p>Notre plateforme dispose d'un interface utilisateur simple pour une navigation fluide et maitrisée</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">settings</i>
                            </div>
                            <h4 class="info-title">Personnalisée</h4>
                            <p>Chacun de nos utilisateurs bénéficient d'un tableau de bord personnalisé répondant à ses besoins </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">lock</i>
                            </div>
                            <h4 class="info-title">Securisée</h4>
                            <p>Nous vous garantisons la protection de vos données personnelles respectant les normes en vigeures</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

    </div>


   <!-- <div class="projects-1" id="projects-1">

      <div class="container">
        <div class="row">
          <div class="col-md-12 ml-auto mr-auto text-center">
            <h2 class="title">Notre Mission</h2>
            <ul class="nav nav-pills nav-pills-rose tab-space">

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
                  <h3 class="title">Orientation & Choix de Formation</h3>

                  <p class="lead">HAKEKO vous oriente et vous conseil dans la recherche de votre formation. </p>
                  <p>Durant votre recherche de formation HAKEKO vous mettra en contact avec un conseiller pédagogique afin de vous aider à trouve la formation qui vous convient selon votre niveau d’étude, la série de votre Bac ou encore de vos préférences en terme de filières d’études.
                  </p>
                  <p> Hakeko garantie à tous les étudiants qui auront recours à la plateforme d’intégrer des écoles ou universités de qualité et d’avoir des diplômes certifiés reconnus par l’Etat.
                  </p>
                </div>
                <div class="tab-pane" id="schedule-1">
                  <h3 class="title">Un Accompagnement unique</h3>
                  <p class="lead">HAKEKO vous accompagne pour une intégration réussie </p>
                  <p>Hakeko propose à l'étudiant une palette de services complémentaires, personnalisés grâce à des partenarriats avec les entreprises concernées.
                  </p>
                  <p> Grace à nos nombreux partenariats HAKEKO répond à vos besoins principaux en matière de logement soit en colocation ou en résidences universitaires, vous met en relation avec votre Ambassade pour toutes vos questions de documentation de séjour, des offres bancaires pour la gestion et la sécurité de vos fonds et bien plus encore, avec HAKEKO, HAKUNA MATATA.
                  </p>
                </div>
                <div class="tab-pane" id="tasks-1">
                  <h3 class="title">HAKEKO vous donne les bonnes informations</h3>
                  <p class="lead">Nous vous donnons des informations fiables pour vos démarches </p>
                  <p>Hakeko facilite cette phase en fournissant des informations fiables et permet la demande en ligne des principaux documents administratifs, en lien avec votre Ambassade vous pourrez effectuer vos demandes de document avant votre arrivée sur place.
                  </p>
                  <p> Nous vos donnerons d'autres informations suplémentaires selon votre besoins ou à la demande afin de vous donnez toutes les clés d'une belle intégration sans soucis, Hakuna Matata
                  </p>
                </div>
                <div class="tab-pane" id="tasks-2">
                  <h3 class="title">Intégrer des Associations Estudiantines</h3>
                  <p class="lead">HAKEKO vous intègre automatiquement auprès des associations de chaque pays </p>
                  <p>Les associations éstudiantines organisent des voyages d'intégrations pour renforcer les liens de fraternité et vous faire découvrir la culture et les sites touristiques du pays.
                  </p>
                  <p>HAKEKO grâce aux associations estudiantines vous intègre dans une grande famille, le tous dans un esprit de panafricanisme l'objectif étant que tout africain se sente partout chez lui.
                  </p>
                </div>
            </div>


          </div>
        </div>
        </div>


    </div> -->


    <!--     *********     FEATURES 3      *********      -->
   <!-- <div class="features-3" style="background-color: #ccc">
        <div class="row container">
            <div class="col-md-6">
                <div class="phone-container">
                    <img src="assets/img/sections/iphone.png" alt="procédure">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="title">Votre integration</h2>
                <div class="info info-horizontal">
                    <div class="icon icon-primary">
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Inscription sur la plateforme</h4>
                        <p>Inscrivez vous sur notre plateforme et commencez votre intégration </p>
                    </div>
                </div>
                <div class="info info-horizontal">
                    <div class="icon icon-primary">
                        <i class="material-icons">lightbulb_outline</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Solution à vos besoins</h4>
                        <p>Ecoles pour la formation, Logement, Ambassade pour les documents, Compagnies aérienne pour le billet et les Banques pour la sécurité et la gestion de votre argent. </p>
                    </div>
                </div>
                <div class="info info-horizontal">
                    <div class="icon icon-primary">
                        <i class="material-icons">euro_symbol</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Paiements des différents frais</h4>
                        <p>Payez les différents frais engagés, formation, logement, billet d'avion. Enfin, nous vous Acceuillerons à l'aéroport à votre arrivée </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--     *********    TESTIMONIALS 2     *********      -->
    <div class="testimonials-2 section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicatorss" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card card-testimonial card-plain">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                    <img class="img" src="{{asset('/img/faces/kendall.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-description">"I speak yell scream directly at the old guard on behalf of the future. I gotta say at that time I’d like to meet Kanye I speak yell scream directly at the old guard on behalf of the future. My brother Chance!!!
                                            <br>Thank you for letting me work on this masterpiece. One of my favorite people."
                                        </h5>
                                        <h4 class="card-title">Kendall Thompson</h4>
                                        <h6 class="card-category text-muted">CEO @ Marketing Digital Ltd.</h6>
                                        <div class="footer">
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card card-testimonial card-plain">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                    <img class="img" src="{{asset('/img/faces/christian.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-description">"Thank you Anna for the invite thank you to the whole Vogue team Called I Miss the Old Kanye At the God's last game Chop up the soul Kanye. I promise I will never let the people down. I want a better life for all!!! Pablo Pablo Pablo Pablo! Thank you Anna for the invite thank you to the whole Vogue team."
                                        </h5>
                                        <h4 class="card-title">Christian Louboutin</h4>
                                        <h6 class="card-category text-muted">Designer @ Louboutin &amp; Co.</h6>
                                        <div class="footer">
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicatorss" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicatorss" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--     *********    END FEATURES 3      *********      -->
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12  mr-auto ml-auto" style="margin-top: 10px; margin-bottom: 10px;">
          <img src="{{asset('/img/client-logos.png') }}" class="img-fluid" alt="">


        </div>
      </div>
    </div>



    <!--     *********    END TESTIMONIALS 2      *********      -->
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
<!-- Modal -->

<!-- Modal -->

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
<script>
    $(document).ready(function() {
      var video_link = '<iframe width="560" height="315" src="https://www.youtube.com/embed/P7_aKYU95jk?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
          $('.open_modal_video').click(function () {
            $('.video-container').html(video_link);

          });

          $('#myModal').on('hidden.bs.modal', function (e) {
            $('.video-container').html('');
          });


        });
</script>
@stop
