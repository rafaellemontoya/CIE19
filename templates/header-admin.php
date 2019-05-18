<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es" class="wide wow-animation smoothscroll scrollTo">
  <head>
    <!-- Site Title-->
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Tauri" rel="stylesheet">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
        <header class="page-head header-panel-absolute">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav data-md-device-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="210" data-xl-stick-up-offset="85" class="rd-navbar rd-navbar-default" data-lg-auto-height="true" data-auto-height="false" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <h4 class="panel-title veil-md">Inicio</h4>
                <!-- RD Navbar Right Side Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-top-panel" class="rd-navbar-top-panel-toggle veil-md"><span></span></button>
                <div class="rd-navbar-top-panel">
                  <div class="rd-navbar-top-panel-left-part">
                    <ul class="list-unstyled">
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi fa-calendar text-middle"></span></div>
                          <div class="unit-body"> 4 al 8 de septiembre de 2017
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle"></span></div>
                          <div class="unit-body"><a href="#">Centro de Educación Continua Ing. Eugenio Méndez Docurro </a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <!-- >
                          <div class="unit-left"><span class="icon mdi mdi-email-open text-middle"></span></div>
                          <div class="unit-body"><a href="mailto:#">info@demolink.org</a></div>
                        </div>
                        -->
                      </li>
                    </ul>
                  </div>
                  <div class="rd-navbar-top-panel-right-part">
                    <div class="rd-navbar-top-panel-left-part">
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <?php if(isset ($_SESSION['id_user'])){?>
	                        <div class="unit-left"><span class="icon mdi fa-user text-middle"></span></div>
	                        <div class="unit-body">Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido'] ?></div>
	                        <div class="unit-left"><span class="icon mdi mdi-login text-middle"></span></div>
	                        <div class="unit-body"><a href="logout-admin.php">Cerrar sesión</a></div>

                        <?php }else{//Sesion NO iniciada?>
                        <div class="unit-left"><span class="icon mdi mdi-login text-middle"></span></div>
                        <div class="unit-body"><a href="inicio-sesion-admin">Inicio sesión/Registro</a></div>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-menu-wrap clearfix">
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a href="index" class="reveal-inline-block">
                    <div class="unit unit-xs-middle unit-xl unit-xl-horizontal unit-spacing-xxs">
                      <div class="unit-left"><img width='170' height='172' src='images/logo-170x172.png' alt=''/></div>
                      <div class="unit-body text-xl-left">
                        <div class="rd-navbar-brand-title">C I E 2017</div>
                        <div class="rd-navbar-brand-slogan">Congreso Internacional de Energía</div>
                      </div>
                    </div></a></div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="index"><img width='136' height='138' src='images/logo-170x172.png' alt=''/></a></div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="active"><a href="logout">Volver al CIE2017</a>
                      </li>
                      <li>
                        <a href="comprobantes-pago-admin">Comprobantes de pago</a>
                      </li>
                      <li>
                        <a href="inscripcion-admin">Inscripcion</a>
                      </li>
                      <li>
                        <a href="gafetes-admin">Gafetes</a>
                        <div class="rd-navbar-megamenu">
                           <div class="row section-relative">
                             <ul class="col-md-6">
                               <li class="tabs-nav">
                               <a href="gafetes-admin">
                                 <h6 style="text-align: center;">Crear gafetes</h6>
                                 </a>

                               </li>
                             </ul>
                             <ul class="col-md-6">
                               <li>
                               <a href="gafetes-entregados-admin">
                                 <h6 style="text-align: center;">Gafetes entregados</h6>
                                 </a>

                               </li>
                             </ul>
                           </div>
                         </div>
                      </li>
                      <li>
                        <a href="diplomas-admin">Diplomas</a>
                        <div class="rd-navbar-megamenu">
                           <div class="row section-relative">
                             <ul class="col-md-6">
                               <li class="tabs-nav">
                               <a href="diplomas-admin">
                                 <h6 style="text-align: center;">Crear diplomas</h6>
                                 </a>

                               </li>
                             </ul>
                             <ul class="col-md-6">
                               <li>
                               <a href="diplomas-entregados-admin">
                                 <h6 style="text-align: center;">Diplomas entregados</h6>
                                 </a>

                               </li>
                             </ul>
                           </div>
                         </div>
                      </li>
                      <li>
                        <a href="#">Facturas</a>
                        <div class="rd-navbar-megamenu">
                           <div class="row section-relative">
                             <ul class="col-md-6">
                               <li class="tabs-nav">
                               <a href="facturacion-admin">
                                 <h6 style="text-align: center;">Facturas Solicitadas</h6>
                                 </a>

                               </li>
                             </ul>
                             <ul class="col-md-6">
                               <li>
                               <a href="registrar-datos-factura-admin">
                                 <h6 style="text-align: center;">Registrar datos</h6>
                                 </a>

                               </li>
                             </ul>
                           </div>
                         </div>
                      </li>
                       <li><a href="#">Listas de inscripcion</a>
                       <div class="rd-navbar-megamenu">
                          <div class="row section-relative">
                            <ul class="col-md-6">
                              <li class="tabs-nav">
                              <a href="lista-inscritos-admin">
                                <h6 style="text-align: center;">General</h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="lista-inscripcion-congreso-admin">
                                <h6 style="text-align: center;">Al Congreso</h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="lista-taller1-admin">
                                <h6 style="text-align: center;">Taller 1</h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="lista-taller2-admin">
                                <h6 style="text-align: center;">Taller 2</h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="lista-taller3-admin">
                                <h6 style="text-align: center;">Taller 3</h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="lista-taller4-admin">
                                <h6 style="text-align: center;">Taller 4</h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="lista-taller5-admin">
                                <h6 style="text-align: center;">Taller 5</h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="lista-cultural1-admin">
                                <h6 style="text-align: center;">Cultural 1</h6>
                                </a>

                              </li>
                            </ul>
                          </div>
                        </div>
                    </ul>
                    <!--RD Navbar Mobile Search-->
                    <div id="rd-navbar-search-mobile" class="rd-navbar-search-mobile">
                      <form action="search-results" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                        <div class="form-group">
                          <label for="rd-navbar-mobile-search-form-input" class="form-label">Buscar...</label>
                          <input id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                        </div>
                        <button type="submit" class="icon fa-search rd-navbar-search-button"></button>
                      </form>
                    </div>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a data-rd-navbar-toggle=".rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
                  <form action="search-results" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                    <div class="form-group">
                      <label for="rd-navbar-search-form-input" class="form-label">Buscar</label>
                      <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                      <div id="rd-search-results-live" class="rd-search-results-live"></div>
                    </div>
                  </form>
                </div>
                <!--RD Navbar shop-->
              </div>
            </div>
          </nav>
        </div>
      </header>
