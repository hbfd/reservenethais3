<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';

	// if session is not set this will redirect to login page
//	if( !isset($_SESSION['user']) ) {
///		header("Location: index.php");
//		exit;
//	}
	// select loggedin users detail
//	$res=mysql_query("SELECT * FROM users WHERE userRegistration=".$_SESSION['user']);
//	$userRow=mysql_fetch_array($res);

	
	// A sessão precisa ser iniciada em cada página diferente
	if (!isset($_SESSION)) session_start();
	 
	// Verifica se não há a variável da sessão que identifica o usuário
	if (!isset($_SESSION['user'])) {
		// Destrói a sessão por segurança
		session_destroy();
		// Redireciona o visitante de volta pro login
		header("Location: login.php"); exit;
	}
	
?>


<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
      <meta charset="utf-8">
      <title>ReservENE</title>
      <meta name="description" content="ReservENE">
      <meta name="author" content="UnB">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Google Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
      <!-- Library CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="css/team-member.css" media="screen">
      <link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="css/animations.css" media="screen">
      <link rel="stylesheet" href="css/prettyPhoto.css" media="screen">
      <link rel="stylesheet" href="css/jquery.bxslider.css" media="screen">
      <!-- Theme CSS -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/global.css">
      <!-- Skin -->
      <link rel="stylesheet" href="css/colors/blue.css" class="colors">


      <!-- Favicons -->
      <link rel="shortcut icon" href="img/ico/favicon.ico">
      <link rel="apple-touch-icon" href="img/ico/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="img/ico/apple-touch-icon-72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="img/ico/apple-touch-icon-114.png">
      <link rel="apple-touch-icon" sizes="144x144" href="img/ico/apple-touch-icon-144.png">
      <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
     <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
     <script src="js/respond.min.js"></script>
     <![endif]-->
      <!--[if IE]>
     <link rel="stylesheet" href="css/ie.css">
     <![endif]-->
</head>
<body data-spy="scroll" data-target="#navigation" data-offset="75">
      <!-- Page Preloader -->
       <div class="page-mask">
            <div class="page-loader">

                <div class=""></div>
            </div>
      </div>
      <!-- /Page Preloader -->

      <!-- Warpper -->
      <div class="wrap with-logo">

            <!--/Image Background Parallax -->

            <!-- Header -->
            <header id="section1" class="parallax-slider">

                  <!-- Navigation -->
                  <div id="navigation">
                        <nav class="navbar navbar-custom cl-effect-21" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2 mob-logo">
                                                <div class="row">
                                                      <div class="site-logo">
                                                            <a href="index.html"><img src="logo1.png" alt="ReservENE"></a>
                                                      </div>
                                                </div>
                                          </div>


                                          <div class="col-md-10 mob-menu">
                                                <div class="row">
                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li><a href="calendar.html" onclick="location.href='calendar.html'">Mapa de Salas</a></li>
                                                                    <li><a href="reservas.php" onclick="location.href='reservas.php'">Reservas</a></li>  
                                                                    <li><a href="disciplinas.php" onclick="location.href='disciplinas.php'">Disciplinas</a></li>  
                                                                  
                                    			 <li class="dropdown">
              									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			 	 								<span class="glyphicon glyphicon-user"></span>&nbsp;Bem-vindo(a), <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              									<ul class="dropdown-menu">
               									<li><a href="logout.php?logout" onclick="location.href='logout.php'"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sair</a></li>
              									</ul>
            									</li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
                  </div>
                  <!-- /Navigation -->
            </header>
            <!-- /Header -->

            <!-- Section 2 -->
            <section id="section2" class="about">
                  <div class="container">
                        <!-- Title row -->
                        <div class="row">
                        	  <div class="col-md-12 big-title wow bounceIn">
                                    <h2>Minhas Disciplinas</h2>
                              </div>
                         <!--     <div class="col-md-12 big-title wow bounceIn">
                                    <h2>Reserve uma sala em apenas um clique!</h2>
                              </div>
                                <div class="col-md-12 sub-title text-center wow slideInRight">
                                    <h3> O projeto ReservENE tem como objetivo facilitar a comunicação entre os estudantes da Faculdade de Tecnologia e
                                        a secretaria do departamento. Deseja reservar uma sala? Saiba com antecedência onde e quando há disponibilidade e reserve!</h3>
                              </div>

                                <div class="col-md-12 big-title wow bounceIn">
                                    <h2>Como usar?</h2>
                              </div>

                              <div class="col-md-12 sub-title text-left wow slideInRight">
                                  <div class="row">
                                      <div class="col-md-8" style="top:50px">
                                        <h3> Para visualizar os eventos, basta clicar na opção mapa de salas acima.</br> Para realizar o pedido de uma reserva:</br>
                                             1 - Realizar o cadastro no site;</br>
                                             2 - Acessar a página do mapa de salas;</br>
                                             3 - Buscar o horário e a sala desejados;</br>
                                             4 - Clicar sobre o horário desejado no calendário;</br>
                                             5 - Preencher o formulário e aguardar a resposta da secretaria.</h3>
                                    </div>
                                         <div class="col-md-4">
                                               <img src="img/tela1.png" alt="About Us" class="img-responsive">
                                         </div>
                                 </div>
                              </div> -->




                              <div class="clearfix"></div>
                        </div>
                        <!-- /Title row -->


                  </div>

                  <!-- Google Map -->
                  <!-- <div class="mapouter"><div class="gmap_canvas">
                     <iframe width="2000" height="300" id="gmap_canvas" style="pointer-events:none" src="https://maps.google.com/maps?q=Faculdade%20de%20Tecnologia&t=&z=17&ie=UTF8&iwloc=&output=embed"
                     frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                 </iframe>google map <a href="http://www.embedgooglemap.net">embedgooglemap.net</a></div>
                 <style>.mapouter{overflow:hidden;height:300px;width:2000px;}.gmap_canvas {background:none!important;height:300px;width:2000px;}
                     </style>
                 </div> -->
                  <!-- /Google Map -->

    <footer class="footer-wrap text-center">
        <div class="row" id="row-footer">
           <div class="col-md-20" id="local">
              <a id="rodape" onclick="localizacao_unb()" role="button"><i class="fa fa-map-marker"></i></a>
              <p><a id="rodape-unb" onclick="localizacao_unb()" role="button"><span id="unb-footer">Universidade de Brasília</span> - Brasília, DF</a></p>
              <div id="email">
                 <a href="mailto:reservene@gmail.com"><i class="fa fa-envelope"></i></a>
                 <p><a href="mailto:reservene@gmail.com" role="button">reservene@gmail.com</a></p>
                 <a href="termos-de-uso.pdf" id="politica" target="_blank">
                    <p class="footer-unba-alerta">Política de Privacidade</p>
                 </a>
              </div>
           </div>
        </div>

              <div class="modal-footer">Equipe Projeto Transversal B © 2017</div>
        </footer>

            </section>
            <!-- /Section 7 -->

            <!-- Scroll To Top -->
            <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
      </div>
      <!-- /Warpper -->



      <!-- The Scripts -->
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate-1.0.0.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.parallax.js"></script>
      <script src="js/jquery.hparallax.js"></script>
      <script src="js/jquery.wait.js"></script>
      <script src="js/appear.js"></script>
      <script src="js/fappear.js"></script>
      <script src="js/modernizr-2.6.2.min.js"></script>
      <script src="js/jquery.bxslider.min.js"></script>
      <script src="js/jquery.maximage.js"></script>
      <script src="js/jquery.cycle.all.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/jquery.isotope.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/jquery.countTo.js"></script>
      <script src="js/skrollr.min.js"></script>
      <script src="js/jquery.scrollTo.min.js"></script>
      <script src="js/jquery.nav.js"></script>
      <script src="js/wow.js"></script>
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script src="js/jquery.gmap.min.js"></script>
      <script src="js/jquery.mb.YTPlayer.js"></script>
      <script src="js/tytabs.js"></script>
      <script src="js/custom.js"></script>

</body>
</html>

<?php ob_end_flush(); ?>
