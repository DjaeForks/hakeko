@extends('Layouts.pageecole')

@section('headerecole')

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
    <link rel="stylesheet" href="{{asset('/css/flashy.css') }}">
    <!-- Documentation extras -->
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



@section('bodyecole')

<body class="about-us ">

<nav class="navbar    fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-translate">
							    <a class="navbar-brand" href="index.php"><img src="{{asset('/img/sections/logo-small.png') }}" alt="logo Akeko"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
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
                                    <li class="nav-item">
                                        <a href="#pablo" class="btn btn-info btn-raised btn-fab btn-round" data-toggle="dropdown">
                                            <i class="material-icons">email</i>
                                        </a>
                                    </li>
                                    <li class="dropdown nav-item">
                                        <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                                            <div class="profile-photo-small">
                                                <img src="{{asset('/img/faces/avatar.jpg') }}" alt="Circle Image" class="rounded-circle img-fluid">

                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <h6 class="dropdown-header">lilcouldji2010@gmail.com</h6>
                                            <a href="#pablo" class="dropdown-item">Changer de photo</a>
                                            <a href="#pablo" class="dropdown-item">Message reçu</a>
                                            <a href="/deconnexion" class="dropdown-item">Deconnexion</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-->
                    </nav>
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/img/reherche.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h1 class="title">Formation</h1>
    <div class="card card-plain card-form-horizontal">
     <form method="" action="#">
        <div class="row">

         <div class=" form-group has-white col-lg-10 col-md-3">
               <input type="text" class="form-control" placeholder="Recherche ">
	     </div>
	     <button type="submit" class="btn btn-info btn-raised btn-fab btn-round float-right">
             <i class="material-icons">search</i>
        </button>
      </div>
    </div>
  </form>      </div>
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('/img/bg5.jpg') }}">
                                </a>
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">50.000 DHM</h6>
                                <h4 class="card-title">
                                    <a href="#pablo">UIR: Université Internationale de Rabat</a>

                                </h4>

                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More
									</a>
                                </p>
                            </div>
					<div class="col-lg-12 auto">
						 <div class="col-lg-6 float-left">
                                  <button type="button" class="btn btn-xs btn-round btn-info">Contact</button>
							</div>
							<div class="col-lg-6 float-right">
								  <button type="button" class="btn btn-info btn-round btn btn-success">Postulé</button >
						 </div>
				    </div>

					  </div>


                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('/img/examples/blog5.jpg') }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">
                                    35.000 DHM
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">UM6SS: Université Mohammed VI des Sciences de la Santé</a>
                                </h4>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More </a>
                                </p>

                            </div>
							<div class="col-lg-12 auto">
						 <div class="col-lg-6 float-left">
                                  <button type="button" class="btn btn-xs btn-round btn-info">Contact</button>
							</div>
							<div class="col-lg-6 float-right">
								  <button type="button" class="btn btn-info btn-round btn btn-success">Postulé</button >
						 </div>
				    </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('/img/examples/blog6.jpg') }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">
                                     30.000 DHM
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Université Mundiapolis Casablanca</a>

                                </h4>
								<br/>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More </a>
                                </p>

                            </div>
							<div class="col-lg-12 auto">
						 <div class="col-lg-6 float-left">
                                  <button type="button" class="btn btn-xs btn-round btn-info">Contact</button>
							</div>
							<div class="col-lg-6 float-right">
								  <button type="button" class="btn btn-info btn-round btn btn-success">Postulé</button >
						 </div>
				    </div>
                        </div>
                    </div>
                </div>

				<!-- L2 -->

				<div class="row ">
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('/img/bg5.jpg') }}">
                                </a>
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">50.000 DHM</h6>
                                <h4 class="card-title">
                                    <a href="#pablo">UIR: Université Internationale de Rabat</a>

                                </h4>

                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More
									</a>
                                </p>
                            </div>
					<div class="col-lg-12 auto">
						 <div class="col-lg-6 float-left">
                                  <button type="button" class="btn btn-xs btn-round btn-info">Contact</button>
							</div>
							<div class="col-lg-6 float-right">
								  <button type="button" class="btn btn-info btn-round btn btn-success">Postulé</button >
						 </div>
				    </div>

					  </div>


                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('/img/examples/blog5.jpg') }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">
                                    35.000 DHM
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">UM6SS: Université Mohammed VI des Sciences de la Santé</a>
                                </h4>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More </a>
                                </p>

                            </div>
							<div class="col-lg-12 auto">
						 <div class="col-lg-6 float-left">
                                  <button type="button" class="btn btn-xs btn-round btn-info">Contact</button>
							</div>
							<div class="col-lg-6 float-right">
								  <button type="button" class="btn btn-info btn-round btn btn-success">Postulé</button >
						 </div>
				    </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('/img/examples/blog6.jpg') }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">
                                     30.000 DHM
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Université Mundiapolis Casablanca</a>

                                </h4>
								<br/>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More </a>
                                </p>

                            </div>
							<div class="col-lg-12 auto">
						 <div class="col-lg-6 float-left">
                                  <button type="button" class="btn btn-xs btn-round btn-info">Contact</button>
							</div>
							<div class="col-lg-6 float-right">
								  <button type="button" class="btn btn-info btn-round btn btn-success">Postulé</button >
						 </div>
				    </div>
                        </div>
                    </div>
                </div>
				<br/>

				<!-- Fl -->

				<!-- L3 -->

				<div class="row ">
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('/img/bg5.jpg') }}">
                                </a>
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">50.000 DHM</h6>
                                <h4 class="card-title">
                                    <a href="#pablo">UIR: Université Internationale de Rabat</a>

                                </h4>

                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More
									</a>
                                </p>
                            </div>
					<div class="col-lg-12 auto">
						 <div class="col-lg-6 float-left">
                                  <button type="button" class="btn btn-xs btn-round btn-info">Contact</button>
							</div>
							<div class="col-lg-6 float-right">
								  <button type="button" class="btn btn-info btn-round btn btn-success">Postulé</button >
						 </div>
				    </div>

					  </div>


                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('/img/examples/blog5.jpg') }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">
                                    35.000 DHM
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">UM6SS: Université Mohammed VI des Sciences de la Santé</a>
                                </h4>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More </a>
                                </p>

                            </div>
							<div class="col-lg-12 auto">
						 <div class="col-lg-6 float-left">
                                  <button type="button" class="btn btn-xs btn-round btn-info">Contact</button>
							</div>
							<div class="col-lg-6 float-right">
								  <button type="button" class="btn btn-info btn-round btn btn-success">Postulé</button >
						 </div>
				    </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('/img/examples/blog6.jpg') }}">

                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">
                                     30.000 DHM
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Université Mundiapolis Casablanca</a>

                                </h4>
								<br/>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More </a>
                                </p>

                            </div>
							<div class="col-lg-12 auto">
						 <div class="col-lg-6 float-left">
                                  <button type="button" class="btn btn-xs btn-round btn-info">Contact</button>
							</div>
							<div class="col-lg-6 float-right">
								  <button type="button" class="btn btn-info btn-round btn btn-success">Postulé</button >
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
    materialKitDemo.initContactUs2Map();
});
</script>
<!-- Sharrre libray -->
<script src="{{asset('/assets-for-demo/js/jquery.sharrre.js') }}"></script>
<script>
$(document).ready(function() {
    $('#twitter').sharrre({
        share: {
            twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
            twitter: {
                via: 'CreativeTim'
            }
        },
        click: function(api, options) {
            api.simulateClick();
            api.openPopup('twitter');
        },
        template: '<i class="fa fa-twitter"></i> Twitter',
        url: 'http://demos.creative-tim.com/material-kit-pro/presentation.html'
    });

    $('#facebook').sharrre({
        share: {
            facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
            api.simulateClick();
            api.openPopup('facebook');
        },
        template: '<i class="fa fa-facebook-square"></i> Facebook',
        url: 'http://demos.creative-tim.com/material-kit-pro/presentation.html'
    });

    $('#google').sharrre({
        share: {
            googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
            api.simulateClick();
            api.openPopup('googlePlus');
        },
        template: '<i class="fa fa-google-plus"></i> Google',
        url: 'http://demos.creative-tim.com/material-kit-pro/presentation.html'
    });
});


var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-46172202-1']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();

// Facebook Pixel Code Don't Delete
! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
        n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window,
    document, 'script', '../../connect.facebook.net/en_US/fbevents.js');

try {
    fbq('init', '111649226022273');
    fbq('track', "PageView");

} catch (err) {
    console.log('Facebook Track Error:', err);
}
</script>


@stop
