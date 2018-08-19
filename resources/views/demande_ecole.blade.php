@extends('Layouts.demande_pour_ecole')

@section('headdemande')
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

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{asset('/css/material-kit.mine8da.css') }}">

  <!-- iframe removal -->
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

@section('bodydemande')

<div class="page-header header-filter" style="background-image: url('/img/bg_students.jpg'); background-size: cover; background-position: top center;">

        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card card-signup">
					   <h2 class="card-title text-center">DEMANDE D'AJOUT</h2>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="raison_soc" class="bmd-label-floating">Raison sociale</label>
                                          <input type="text" class="form-control" id="raison_soc">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="pays" class="bmd-label-floating">Numéro d’autorisation</label>
                                          <input type="text" class="form-control" id="num_autorisation">
								    </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
										  <label for="pays" class="bmd-label-floating">nom de la filière à ajouter</label>
                                          <input type="text" class="form-control" id="non_filiere">
                                       </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                          <select class="selectpicker" data-style="select-with-transition" title="Niveau de la formation"       data-size="6" id="niveau_etude">
                                                <option value="bac" id="bac">Bac</option>
                                                <option value="bac+1">Bac+1</option>
                                                <option value="bac+2">Bac+2</option>
                                                <option value="bac+3">Bac+3</option>
                                                <option value="bac+4">Bac+5</option>
                                                <option value="bac+5">Bac+5</option>
                                              </select>
                                          </div>

                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="adress_ecole" class="bmd-label-floating">Descrition de la fortion</label>
                                          <textarea class="form-control" rows="5" id="description_formation"></textarea>
                                      </div>
                                    </div>

                                  </div>

                                  <div class="row">
                                    <div class="col-md-8">
                                      <div class="form-group">
                                          <label for="num_autorisation" class="bmd-label-floating">Adress complet</label>
                                          <input type="text" class="form-control" id="num_autorisation">
                                      </div>
                                    </div>
                                  </div>



                                </div>
                                <div class="col-md-5 mr-auto">

                                  <div class="form-group">
                                      <label for="email" class="bmd-label-floating">Email</label>
                                      <input type="email" class="form-control" id="email">
                                  </div>

                                  <div class="form-group">
                                      <label for="tel" class="bmd-label-floating">Tel.</label>
                                      <input type="text" class="form-control" id="tel">

                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="connu_hakeko" class="bmd-label-floating">Description de l'ecole</label>
                                          <textarea class="form-control" rows="5" id="connu_hakeko"></textarea>
                                      </div>
                                    </div>

                                  </div>


                                  <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                                J’accepte les
                                                <a href="#">conditions générales du service et code d’honneur</a>
                                                Hakeko.
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <a href="#pablo" class="btn btn-info btn-round">Envoyer</a>
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

        <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
        <script src="{{asset('/assets-for-demo/js/material-kit-demo.js') }}"></script>
        <!-- Sharrre libray -->
        <script src="{{asset('/assets-for-demo/js/jquery.sharrre.js') }}"></script>
        <!-- <script src="assets/js/jquery.youtubebackground.js"></script> -->
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



        });

</script>


@stop
