<?php
session_start();
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="es" class="wide wow-animation smoothscroll scrollTo">
  <head>
    <!-- Site Title-->
    <title><?php echo $lang_header['titulo'];?></title>
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
                <h4 class="panel-title veil-md"><?php echo $lang_header['inicio'];?></h4>
                <!-- RD Navbar Right Side Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-top-panel" class="rd-navbar-top-panel-toggle veil-md"><span></span></button>
                <div class="rd-navbar-top-panel">
                  <div class="rd-navbar-top-panel-left-part">
                    <ul class="list-unstyled">
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi fa-calendar text-middle"></span></div>
                          <div class="unit-body"> <b><?php echo $lang_header['fecha'];?>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle"></span></div>
                          <div class="unit-body"><a href="https://www.google.com/maps/place/Centro+Cultural+Universitario/@19.7028126,-101.1948682,15z/data=!4m5!3m4!1s0x0:0x27434b495acac0ad!8m2!3d19.7028126!4d-101.1948682">Centro Cultural Universitario, de la Universidad Michoacana de San Nicolás de Hidalgo </a></div>
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

                      <!-- <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <?php if(isset ($_SESSION['id_user'])){?>
	                        <div class="unit-left"><span class="icon mdi fa-user text-middle"></span></div>
	                        <div class="unit-body">Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido'] ?></div>
	                        <div class="unit-left"><span class="icon mdi mdi-login text-middle"></span></div>
	                        <div class="unit-body"><a href="logout.php">Cerrar sesión</a></div>

                        <?php }else{//Sesion NO iniciada?>
                        <div class="unit-left"><span class="icon mdi mdi-login text-middle"></span></div>
                        <div class="unit-body"><a href="inicio-sesion">Inicio sesión/Registro</a></div>
                        <?php }?>
                      </div> -->
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
                        <div class="rd-navbar-brand-title"><?php echo $lang_header['nombre_evento_1'];?></div>
                        <div class="rd-navbar-brand-slogan"><?php echo $lang_header['nombre_evento_2'];?></div>
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
                      <li class="active"><a href="index"><?php echo $lang_header['inicio'];?></a>
                      </li>
                      <li><a href="#"><?php echo $lang_header['acerca_de'];?></a>
                                              <div class="rd-navbar-megamenu">
                          <div class="row section-relative">
                            <ul class="col-md-4">
                              <li class="tabs-nav">
                              <a href="invitacion.php">
                                <h6 style="text-align: center;"><?php echo $lang_header['invitacion'];?></h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-4">
                              <li>
                              <a target="_blank" href="<?php echo $lang_header['link_convocatoria'];?>">
                                <h6 style="text-align: center;"><?php echo $lang_header['convocatoria'];?></h6>
                                </a>
                                <!--
                                <ul class="list-unstyled offset-lg-top-20">
                                  <li><a href="404">404</a></li>
                                  <li><a href="privacy">Terms of Use</a></li>
                                  <li><a href="maintenance">Maintenance</a></li>
                                  <li><a href="login-register">Login/Register</a></li>
                                  <li><a href="coming-soon">Coming Soon</a></li>
                                  <li><a href="search-results">Search Results</a></li>
                                  <li><a href="apply">Apply</a></li>
                                </ul> -->
                              </li>
                            </ul>
                            <ul class="col-md-4">
                              <li>
                              <a href="objetivos">
                                <h6 style="text-align: center;"><?php echo $lang_header['objetivos'];?></h6>
                                </a>
                                <!--  -
                                <ul class="list-unstyled offset-lg-top-20">
                                  <li><a href="header-transparent">Header Transparent</a></li>
                                  <li><a href="header-center">Header Center, Footer Center</a></li>
                                  <li><a href="header-minimal">Header Minimal, Footer Center</a></li>
                                  <li><a href="header-corporate">Header Corporate</a></li>
                                  <li><a href="header-hamburger-menu">Header Hamburger Menu</a></li>
                                  <li><a href="footer-minimal">Footer Minimal</a></li>
                                  <li><a href="footer-widget">Footer Widget</a></li>
                                </ul>
                                -->
                              </li>

                            </ul>
                            <ul class="col-md-4">
                              <li>
                              <a href="tematicas">
                                <h6 style="text-align: center;"><?php echo $lang_header['tematicas'];?></h6>
                                </a>
                                <!--  -
                                <ul class="list-unstyled offset-lg-top-20">
                                  <li><a href="header-transparent">Header Transparent</a></li>
                                  <li><a href="header-center">Header Center, Footer Center</a></li>
                                  <li><a href="header-minimal">Header Minimal, Footer Center</a></li>
                                  <li><a href="header-corporate">Header Corporate</a></li>
                                  <li><a href="header-hamburger-menu">Header Hamburger Menu</a></li>
                                  <li><a href="footer-minimal">Footer Minimal</a></li>
                                  <li><a href="footer-widget">Footer Widget</a></li>
                                </ul>
                                -->
                              </li>

                            </ul>
                            <ul class="col-md-4">
                              <li>
                              <a href="comite-organizador">
                                <h6 style="text-align: center;"><?php echo $lang_header['comite'];?></h6>
                                </a>
                                <!--  -
                                <ul class="list-unstyled offset-lg-top-20">
                                  <li><a href="header-transparent">Header Transparent</a></li>
                                  <li><a href="header-center">Header Center, Footer Center</a></li>
                                  <li><a href="header-minimal">Header Minimal, Footer Center</a></li>
                                  <li><a href="header-corporate">Header Corporate</a></li>
                                  <li><a href="header-hamburger-menu">Header Hamburger Menu</a></li>
                                  <li><a href="footer-minimal">Footer Minimal</a></li>
                                  <li><a href="footer-widget">Footer Widget</a></li>
                                </ul>
                                -->
                              </li>

                            </ul>
                          </div>
                        </div>
                      </li>
                      <li><a href="#"><?php echo $lang_header['inscripcion'];?></a>
                       <div class="rd-navbar-megamenu">
                          <div class="row section-relative">
                            <ul class="col-md-6">
                              <li class="tabs-nav">
                              <a href="instrucciones-inscripcion">
                                <h6 style="text-align: center;"><?php echo $lang_header['instrucciones'];?></h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="inscripcion">
                                <h6 style="text-align: center;"><?php echo $lang_header['inscripcion'];?></h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="instrucciones-pago">
                                <h6 style="text-align: center;"><?php echo $lang_header['instrucciones_pago'];?></h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="comprobante-pago">
                                <h6 style="text-align: center;"><?php echo $lang_header['subir_comprobante_pago'];?></h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="informacion-fiscal">
                                <h6 style="text-align: center;"><?php echo $lang_header['solicitar_factura'];?></h6>
                                </a>

                              </li>
                            </ul>
                          </div>
                        </div>
                      <!--
                        <ul class="rd-navbar-dropdown">
                          <li><a href="classic-news">Classic news</a>
                          </li>
                          <li><a href="grid-news">Grid News</a>
                          </li>
                          <li><a href="masonry-news">Masonry News</a>
                          </li>
                          <li><a href="grid-news-3-columns">3 Columns Grid News</a>
                          </li>
                          <li><a href="modern-news">Modern News</a>
                          </li>
                          <li><a href="news-post-page">News Post Page</a>
                          </li>
                        </ul>
                        -->
                      </li>
                       <li ><a href="ponencias-magistrales"><?php echo $lang_header['ponencias_magistrales'];?></a>
                      </li>
                       <li ><a href="sede"><?php echo $lang_header['sede'];?></a>
                      </li>
                       <li ><a href="costos"><?php echo $lang_header['costos'];?></a>
                      </li>
                      <li><a href="#"><?php echo $lang_header['programas'];?></a>
                        <div class="rd-navbar-megamenu">
                          <div class="row section-relative">
                            <ul class="col-md-4">
                              <li class="tabs-nav">
                              <a href="ProgramaCIE17.pdf">
                                <h6 style="text-align: center;"><?php echo $lang_header['programa'];?></h6>
                                </a>
                                <!--
                                <ul class="list-unstyled offset-lg-top-20">
                                  <li><a href="academic#0">Undergraduate Study</a></li>
                                  <li><a href="academic#1">Graduate &amp; Professional Study</a></li>
                                  <li><a href="academic#2">Departments &amp; Programs</a></li>
                                  <li><a href="academic#3">Global Education</a></li>
                                  <li><a href="academic#4">Summer Session</a></li>
                                  <li><a href="academic#5">Non-Degree Offerings</a></li>
                                  <li><a href="academic#6">Online Learning</a></li>
                                </ul>
                                -->
                              </li>
                            </ul>
                            <ul class="col-md-4">
                              <li>
                              <a href="talleres">
                                <h6 style="text-align: center;"><?php echo $lang_header['talleres'];?></h6>
                                </a>
                                <!--
                                <ul class="list-unstyled offset-lg-top-20">
                                  <li><a href="404">404</a></li>
                                  <li><a href="privacy">Terms of Use</a></li>
                                  <li><a href="maintenance">Maintenance</a></li>
                                  <li><a href="login-register">Login/Register</a></li>
                                  <li><a href="coming-soon">Coming Soon</a></li>
                                  <li><a href="search-results">Search Results</a></li>
                                  <li><a href="apply">Apply</a></li>
                                </ul> -->
                              </li>
                            </ul>
                            <ul class="col-md-4">
                              <li>
                              <a href="programa-cultural">
                                <h6 style="text-align: center;"><?php echo $lang_header['programa_cultural'];?></h6>
                                </a>
                                <!--  -
                                <ul class="list-unstyled offset-lg-top-20">
                                  <li><a href="header-transparent">Header Transparent</a></li>
                                  <li><a href="header-center">Header Center, Footer Center</a></li>
                                  <li><a href="header-minimal">Header Minimal, Footer Center</a></li>
                                  <li><a href="header-corporate">Header Corporate</a></li>
                                  <li><a href="header-hamburger-menu">Header Hamburger Menu</a></li>
                                  <li><a href="footer-minimal">Footer Minimal</a></li>
                                  <li><a href="footer-widget">Footer Widget</a></li>
                                </ul>
                                -->
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li><a href="#"><?php echo $lang_header['envio_trabajos'];?></a>
                       <div class="rd-navbar-megamenu">
                          <div class="row section-relative">
                            <ul class="col-md-6">
                              <li class="tabs-nav">
                              <a href="plantilla-resumenCIE19">
                                <h6 style="text-align: center;"><?php echo $lang_header['plantilla_resumen'];?></h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="plantilla-extensoCIE19">
                                <h6 style="text-align: center;"><?php echo $lang_header['plantilla_extenso'];?></h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="envio-resumenes">
                                <h6 style="text-align: center;"><?php echo $lang_header['envio_resumenes'];?></h6>
                                </a>

                              </li>
                            </ul>
                            <ul class="col-md-6">
                              <li>
                              <a href="envio-extensos">
                                <h6 style="text-align: center;"><?php echo $lang_header['envio_extensos'];?></h6>
                                </a>

                              </li>
                            </ul>
                          </div>
                        </div>
                      <!--
                        <ul class="rd-navbar-dropdown">
                          <li><a href="classic-news">Classic news</a>
                          </li>
                          <li><a href="grid-news">Grid News</a>
                          </li>
                          <li><a href="masonry-news">Masonry News</a>
                          </li>
                          <li><a href="grid-news-3-columns">3 Columns Grid News</a>
                          </li>
                          <li><a href="modern-news">Modern News</a>
                          </li>
                          <li><a href="news-post-page">News Post Page</a>
                          </li>
                        </ul>
                        -->
                      </li>
                      <li><a href="#"><?php echo $lang_header['patrocinadores'];?></a>
                        <div class="rd-navbar-megamenu">
                          <div class="row section-relative">
                            <ul class="col-md-6">
                              <li class="tabs-nav">
                              <a href="patrocinadores">
                                <h6 style="text-align: center;"><?php echo $lang_header['nuestros_patrocinadores'];?></h6>
                                </a>
                                <!--
                                <ul class="list-unstyled offset-lg-top-20">
                                  <li><a href="academic#0">Undergraduate Study</a></li>
                                  <li><a href="academic#1">Graduate &amp; Professional Study</a></li>
                                  <li><a href="academic#2">Departments &amp; Programs</a></li>
                                  <li><a href="academic#3">Global Education</a></li>
                                  <li><a href="academic#4">Summer Session</a></li>
                                  <li><a href="academic#5">Non-Degree Offerings</a></li>
                                  <li><a href="academic#6">Online Learning</a></li>
                                </ul>
                                -->
                              </li>
                            </ul>
                            <ul class="col-md-4">
                              <li>
                              <a href="patrocinadoresCIE.pdf">
                                <h6 style="text-align: center;"><?php echo $lang_header['conviertete_en_patrocinador'];?></h6>
                                </a>
                                <!--
                                <ul class="list-unstyled offset-lg-top-20">
                                  <li><a href="404">404</a></li>
                                  <li><a href="privacy">Terms of Use</a></li>
                                  <li><a href="maintenance">Maintenance</a></li>
                                  <li><a href="login-register">Login/Register</a></li>
                                  <li><a href="coming-soon">Coming Soon</a></li>
                                  <li><a href="search-results">Search Results</a></li>
                                  <li><a href="apply">Apply</a></li>
                                </ul> -->
                              </li>
                            </ul>

                          </div>
                        </div>
                      </li>
                       <li><a href="<?php echo $_SERVER['PHP_SELF']?>?lang=<?php echo $lang_header['texto_cambio_idioma'] ?>"><img alt="as" src="<?php echo $lang_header['img_cambio_idioma'] ?>"> </a>
                      </li>
                      <!--
                        <ul class="rd-navbar-dropdown">
                          <li><a href="product-catalog">Product Catalog</a>
                          </li>
                          <li><a href="single-product">Single Product</a>
                          </li>
                          <li><a href="shopping-cart">Shopping Cart</a>
                          </li>
                          <li><a href="checkout">Checkout</a>
                          </li>
                        </ul>
                        -->
                    </ul>
                    <!--RD Navbar Mobile Search-->
                    <!-- <div id="rd-navbar-search-mobile" class="rd-navbar-search-mobile">
                      <form action="search-results" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                        <div class="form-group">
                          <label for="rd-navbar-mobile-search-form-input" class="form-label"><?php echo $lang_header['buscar'];?>...</label>
                          <input id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                        </div>
                        <button type="submit" class="icon fa-search rd-navbar-search-button"></button>
                      </form>
                    </div> -->
                  </div>
                </div>
                <!--RD Navbar Search-->
                <!-- <div class="rd-navbar-search"><a data-rd-navbar-toggle=".rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
                  <form action="search-results" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                    <div class="form-group">
                      <label for="rd-navbar-search-form-input" class="form-label"><?php echo $lang_header['buscar'];?></label>
                      <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                      <div id="rd-search-results-live" class="rd-search-results-live"></div>
                    </div>
                  </form>
                </div> -->
                <!--RD Navbar shop-->
              </div>
            </div>
          </nav>
        </div>
      </header>
