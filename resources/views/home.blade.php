@extends('layouts.app')

@section('content')
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/img/reherche.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h1 class="title">Formation</h1>
    <div class="card card-plain card-form-horizontal">
     <form method="" action="#">
      <div class="row">
        <div class=" form-group has-white col-lg-11  align-bottom">
          <button type="submit" class="btn btn-info btn-raised btn-fab btn-round float-right">
                <i class="material-icons">search</i>
           </button>
        </div>
        <div class=" form-group has-white col-lg-10 col-md-3">
            <input type="text" class="form-control" placeholder="Recherche ">
	      </div>
      </div>
  </form>
         </div>
       </div>
      </div>
    </div>
  </div>
      <div class="main main-raised">
          <div class="container">

		   <!-- debut -->
		         </br></br>
		            <div>
						 <h2 class="title text-center"><font size="6">Chercher votre formation</font></h2>

					</div>
			    </br></br>
					<div class="row justify-content-center align-items-center">
						  <div class="col-lg-5 col-md-6 col-sm-12">
                                    <select class="selectpicker " data-style="select-with-transition" title="Niveau étude recherché" data-size="7">
                                        <option disabled>Choose city</option>
                                        <option value="2">Foobar</option>
                                        <option value="3">Is great</option>
                                    </select>
                         </div>
						 <div class="col-lg-5 col-md-6 col-sm-3" align="center">
                                    <select class="selectpicker" data-style="select-with-transition" multiple title="Formation désirée" data-size="7">
                                        <option disabled> Choose city</option>
                                        <option value="2">Paris </option>
                                        <option value="3">Bucharest</option>
                                        <option value="4">Rome</option>
                                        <option value="5">New York</option>
                                        <option value="6">Miami </option>

                                    </select>
						 </div>
						 <a href="#pablo" class="btn btn-info float-right">ok</a>
					</div>
						  <!-- fin -->

        <div class="container">

         <div class="section">
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
				<!-- L2 -->

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

				<!-- Fl -->

				<!-- L3 -->

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
				<br/>

				<!-- Fl -->
				<!-- liste -->
				   <!-- liste -->
				   <div class="col-md-4 float-right">
                           </ul>
                            <ul class="pagination pagination-info">
                                <li class="page-item">
                                    <a href="javascript:void(0);" class="page-link"> précédent</a>
                                </li>
                                <li class="active page-item">
                                    <a href="javascript:void(0);" class="page-link">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript:void(0);" class="page-link">2</a>
                                </li>
                                <li class=" page-item">
                                    <a href="javascript:void(0);" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript:void(0);" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript:void(0);" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript:void(0);" class="page-link">suivant</a>
                                </li>
                            </ul>
                        </div>

				<!-- end -->


            </div>
        </div>


        </div>
  </div>

<!--   pour le <footer>   -->


<footer class="footer ">
    <div class="container">
<nav class="pull-left">
                <ul>
                    <li>
                      <a class="btn btn-just-icon btn-round btn-facebook">
                          <i class="fa fa-facebook"> </i>
                      </a>
                    </li>
                    <li>
                      <a class="btn btn-just-icon btn-round btn-youtube">
                          <i class="fa fa-youtube"> </i>
                      </a>
                    </li>
                    <li>
                      <a class="btn btn-just-icon btn-round">
                          <i class="fa fa-instagram"> </i>
                      </a>
                    </li>

                </ul>
            </nav>
    <nav class="pull-center" >
    <ul >
         <li>
                    <a href="demande_ecole.php" >
        <p style="color:#3e3947;"><small>Demande d'ajout</small></p>
                    </a>

                </li>
                <li>
                    <a href="#">
        <p style="color:#3e3947;"><small>Ecoles</small></p>
                    </a>
                </li>
                <li>
                    <a href="#">
        <p style="color:#3e3947;"><small>Nous Connaitre</small></p>
                    </a>
                </li>
                <li>
                    <a href="Contact.php">
        <p style="color:#3e3947;"><small>Contact</small></p>
                    </a>
                </li>

            </ul>
    </nav>


            <div class="copyright pull-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> AKEKO
            </div>
 </div>
</footer>





<!--   end footer  -->


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
    <script src="{{asset('/js/plugins/bootstrap-selectpicker.js') }}"></script>
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
    <script src="assets/js/material-kit.mine8da.js?v=2.0.3"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="{{asset('/js/material-kit.mine8da.js?v=2.0.3') }}"></script>
<!-- Modal -->

<!-- End-->
@endsection
