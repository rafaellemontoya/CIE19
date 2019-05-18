<?php  include_once 'templates/header.php';
?>
      <!-- Page Content-->
      <main class="page-content">
        <section>
          <!-- Swiper-->
          <div data-height="42.1875%" data-loop="1" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
            <div class="swiper-wrapper">

              <div data-slide-bg="images/slide1.jpg" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-lg-left">
                      <div class="cell-md-9 text-md-left cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                          <h1 class="text-bold"><a href="envio-resumenes.php"><?php echo $lang_index['slider_1']; ?></a></h1>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-lg-right-100">
                          <h3></h3>
                          <h5></h5>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="400" class="offset-top-20 offset-xl-top-40"><a href="envio-resumenes.php" class="btn btn-primary"><?php echo $lang_index['btn_slider_1']; ?></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div data-slide-bg="images/slide2.jpg" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-lg-left">
                      <div class="cell-md-9 text-md-left cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                          <h1 class="text-bold"><a href="sede"><?php echo $lang_index['slider_2']; ?></a></h1>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-lg-right-100">
                        <!--
                          <h5>At Jonathan Carroll University, you can succeed in lots of research areas and benefit from investing in your education and knowledge that will help you in becoming an experienced specialist.</h5>
                       -->
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="400" class="offset-top-20 offset-xl-top-40"><a href="sede" class="btn btn-primary"><?php echo $lang_index['btn_slider_2']; ?></a>
                         <!--
                          <div class="inset-xs-left-30 reveal-lg-inline-block"><a href="academic" class="btn btn-default veil reveal-lg-inline-block">Learn More</a></div>
                          -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div data-slide-bg="images/slide3.jpg" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-lg-left">
                      <div class="cell-md-9 text-md-left cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                          <h1 class="text-bold"><a href="costos"><?php echo $lang_index['slider_3']; ?></a></h1>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-lg-right-100">
                        <!--
                          <h5>At Jonathan Carroll University, you can succeed in lots of research areas and benefit from investing in your education and knowledge that will help you in becoming an experienced specialist.</h5>
                       -->
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="400" class="offset-top-20 offset-xl-top-40"><a href="costos" class="btn btn-primary"><?php echo $lang_index['btn_slider_2']; ?></a>
                         <!--
                          <div class="inset-xs-left-30 reveal-lg-inline-block"><a href="academic" class="btn btn-default veil reveal-lg-inline-block">Learn More</a></div>
                          -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
          </div>
        </section>
        <!-- A Few Words About the University-->
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range text-sm-left range-sm-middle range-sm-justify">
              <div class="cell-sm-5 cell-md-4 cell-sm-push-2"><a href="index"><img src="images/logo-326x329.png" width="326" height="329" alt="" class="img-responsive reveal-inline-block"></a></div>
              <div class="cell-sm-7 cell-md-12 cell-sm-push-1 offset-top-50 offset-md-top-0">
                <h2 class="text-bold"><?php echo $lang_index['invitacion']; ?> <br class="veil reveal-lg-inline-block"> </h2>
                <hr class="divider bg-madison hr-sm-left-0">
                <div class="offset-top-35 offset-md-top-60">
                  <p style="" ALIGN="justify">
                <?php echo $lang_index['texto_invitacion_1']; ?><br>
<ul style="">
	<li style="color: #4caf50"><font color="#888888"><?php echo $lang_index['tematica_1']; ?></font><br></li>
  <li style="color: #4caf50"><font color="#888888"><?php echo $lang_index['tematica_2']; ?></font><br></li>
	<li style="color: #4caf50"><font color="#888888"><?php echo $lang_index['tematica_3']; ?></font><br></li>
	<li style="color: #4caf50"><font color="#888888"><?php echo $lang_index['tematica_4']; ?></font><br></li>
	<li style="color: #4caf50"><font color="#888888"><?php echo $lang_index['tematica_5']; ?></font><br></li>
	<li style="color: #4caf50"><font color="#888888"><?php echo $lang_index['tematica_6']; ?></font><br></li>
	<li style="color: #4caf50"><font color="#888888"><?php echo $lang_index['tematica_7']; ?></font><br></li>
</ul>
<p style="" ALIGN="justify">
<?php echo $lang_index['texto_invitacion_2']; ?><br><br>

<!-- Entre las actividades del Congreso se contará con la participación de plenaristas a nivel internacional como el Dr. Hugo De Lasa de la Universidad de Western Ontario, Canadá; el Dr. Ian Metcalfe de la Universidad de Newcastel, Inglaterra,  Raf Dewil de la Universidad de Lueven, Bélgica; el Dr D’angelo, de Italia, el Dr.  Héctor  Poggi Varaldo del Departamento de Biotecnología y Bioingeniería de Centro de Investigación y de Estudios Avanzados del Instituto Politécnico Nacional, México; el Dr. Jorge Islas Samperio del Instituto de Energías Renovables, México; el Dr. Omar Solorza del  Centro de Investigación y de Estudios Avanzados del Instituto Politécnico Nacional, México y al Dr. Rubén Dorantes Rodríguez de la Universidad Autónoma Metropolitana.<br><br>
Además se ofrecerán talleres previos al Congreso donde se impartirán cursos sobre la utilización de ASPEN, ahorro de energía, eficiencia energética, elaboración de proyectos para el programa de estímulos a la innovación, selección de motores eléctricos, comparación entre las energías renovables, aplicación del TAP2 en solución de problemática en SEP,  entre otros.<br> -->


                  </p>
                </div>
                <div class="offset-top-30"><a href="invitacion" class="btn btn-icon btn-icon-right btn-default"><span class="icon fa-arrow-right"></span><span><?php echo $lang_index['mas_info']; ?></span></a></div>
             </div>
            </div>
          </div>
        </section>

          <div class="offset-top-30 offset-lg-top-60">
            <div style="max-width: 992px; margin-left: auto; margin-right: auto" class="offset-top-66">
              <div data-date="2019-09-9 10:00:00" class="DateCountdown"></div>
            </div>
          </div>
          <div class="offset-top-30 offset-lg-top-70"></div>
        <!--Our Featured Courses-->
        <!--
        <section class="bg-madison context-dark">
          <div class="shell">
            <div class="range range-xs-center range-sm-right offset-top-0">
              <div class="cell-xs-10 cell-sm-7 section-image-aside section-image-aside-left text-sm-left">
                <div style="background-image: url(images/Inicio-01-846x1002.jpg)" class="section-image-aside-img veil reveal-sm-block"></div>
                <div class="section-image-aside-body section-70 section-md-114 inset-sm-left-70 inset-lg-left-110">
                  <h2 class="text-bold">Our Featured Courses</h2>
                  <hr class="divider hr-sm-left-0 bg-white">
                  <div class="offset-top-35 offset-md-top-60 text-light">Our Featured Courses are selected through a rigorous process and uniquely created for each semester.</div>
                  <div class="text-left">
                    <div class="offset-top-60">
                      <article class="post-vacation"><a href="academic" style="background-image: url(images/course-01-150x120.jpg)" class="post-vacation-img-wrap bg-image"></a>
                        <div class="post-vacation-body">
                          <div>
                            <h6 class="post-vacation-title"><a href="academic">Financial Analyst Course</a></h6>
                          </div>
                          <div class="offset-lg-top-10">
                            <p>Charles Banks</p>
                          </div>
                          <div class="post-vacation-meta offset-top-10">
                            <time datetime="2016-01-01" class="text-dark">June 3, 2016</time>
                            <ul class="list-inline list-unstyled list-inline-primary">
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Part time" class="icon icon-xxs mdi mdi-timer-sand"></a></li>
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Certified" class="icon icon-xxs mdi mdi-star"></a></li>
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Online Course" class="icon icon-xxs mdi mdi-laptop-chromebook"></a></li>
                            </ul>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="offset-top-30">
                      <article class="post-vacation"><a href="academic" style="background-image: url(images/course-02-150x120.jpg)" class="post-vacation-img-wrap bg-image"></a>
                        <div class="post-vacation-body">
                          <div>
                            <h6 class="post-vacation-title"><a href="academic">Digital Marketing Course</a></h6>
                          </div>
                          <div class="offset-lg-top-10">
                            <p>Maria Howard</p>
                          </div>
                          <div class="post-vacation-meta offset-top-10">
                            <time datetime="2016-01-01" class="text-dark">June 3, 2016</time>
                            <ul class="list-inline list-unstyled list-inline-primary">
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facultative" class="icon icon-xxs mdi mdi-battery-50"> </a></li>
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Certified" class="icon icon-xxs mdi mdi-star"></a></li>
                            </ul>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="offset-top-30">
                      <article class="post-vacation"><a href="academic" style="background-image: url(images/course-03-150x120.jpg)" class="post-vacation-img-wrap bg-image"></a>
                        <div class="post-vacation-body">
                          <div>
                            <h6 class="post-vacation-title"><a href="academic">Graphic Design Course</a></h6>
                          </div>
                          <div class="offset-lg-top-10">
                            <p>Steven Carter</p>
                          </div>
                          <div class="post-vacation-meta offset-top-10">
                            <time datetime="2016-01-01" class="text-dark">June 3, 2016</time>
                            <ul class="list-inline list-unstyled list-inline-primary">
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facultative" class="icon icon-xxs mdi mdi-battery-50"></a></li>
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Certified" class="icon icon-xxs mdi mdi-star"></a></li>
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Online Course" class="icon icon-xxs mdi mdi-laptop-chromebook"></a></li>
                            </ul>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                  <div class="offset-top-60"><a href="academic" class="btn btn-primary">View All Courses</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        -->
        <!-- Counters-->
        <!--
        <section class="section-70 section-md-114">
          <div class="shell">
            <h2 class="text-bold">Statistics</h2>
            <hr class="divider bg-madison">
            <div class="range range-xs-center offset-top-60">
              <div class="cell-xs-10 cell-sm-8">
                <p>Jonathan Carroll University was founded on the principle that by pursuing big ideas and sharing what we learn, we make the world a better place. For more than 135 years, we haven’t strayed from that vision.</p>
              </div>
            </div>
            <div class="range range-xs-center range-md-left offset-top-65 counters">
              <div class="cell-sm-6 cell-md-3">
                <!-- Counter type 1-->
                <!-- >
                <div class="counter-type-1"><span class="icon icon-lg icon-outlined text-madison mdi mdi-school"></span>
                  <div class="h3 text-bold text-primary offset-top-15"><span data-speed="1300" data-from="0" data-to="97" class="counter"></span><span>%</span></div>
                  <hr class="divider bg-gray-light divider-sm"/>
                  <div class="offset-top-10">
                    <h6 class="text-black font-accent">Graduates</h6>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-3 offset-top-65 offset-sm-top-0">
                <!-- Counter type 1-->
                <!--
                <div class="counter-type-1"><span class="icon icon-lg icon-outlined text-madison mdi mdi-wallet-travel"></span>
                  <div class="h3 text-bold text-primary offset-top-15"><span data-speed="1250" data-from="0" data-to="30" class="counter"></span><span>+</span></div>
                  <hr class="divider bg-gray-light divider-sm"/>
                  <div class="offset-top-10">
                    <h6 class="text-black font-accent">Certified Teachers</h6>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-3 offset-top-65 offset-md-top-0">
                <div class="counter-type-1"><span class="icon icon-lg icon-outlined text-madison mdi mdi-domain"></span>
                  <div class="h3 text-bold text-primary offset-top-15"><span data-step="1500" data-from="0" data-to="8" class="counter"></span></div>
                  <hr class="divider bg-gray-light divider-sm"/>
                  <div class="offset-top-10">
                    <h6 class="text-black font-accent">Student Campuses</h6>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-3 offset-top-65 offset-md-top-0">
                <div class="counter-type-1"><span class="icon icon-lg icon-outlined text-madison mdi mdi-account-multiple-outline"></span>
                  <div class="h3 text-bold text-primary offset-top-15"><span data-step="500" data-from="0" data-to="6510" class="counter"></span></div>
                  <hr class="divider bg-gray-light divider-sm"/>
                  <div class="offset-top-10">
                    <h6 class="text-black font-accent">Students</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        -->
        <!-- Trusted by Over 6000+ Students-->
        <!--
        <section class="context-dark">
          <!-- RD Video-->
          <!-- >
          <div data-rd-video-path="video/bg-video-1" data-rd-video-image-xs="26" data-rd-video-image-sm="26" data-rd-video-image-md="37" data-rd-video-image-lg="74" data-rd-video-image-xlg="100" class="rd-video">
            <div class="shell section-100 section-md-160">
              <h2 class="text-bold">Trusted by Over 6000+ Students</h2>
              <div class="offset-top-30">
                <p>Join our community of students around the world helping you succeed.</p>
              </div>
              <div class="offset-top-35 offset-lg-top-70"><a href="login-register" class="btn btn-primary">Get Started</a></div>
            </div>
          </div>
        </section>
        -->
        <!-- Events-->
        <!--
        <section class="bg-catskill">
          <div class="shell-wide section-70 section-md-114">
            <h2 class="text-bold">Events</h2>
            <hr class="divider bg-madison">
            <div class="range offset-top-60 range-xs-center">
              <div class="cell-sm-6 cell-md-5 cell-xl-3">
                <article class="post-event">
                  <div class="post-event-img-overlay"><img src="images/blog/events-01-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                    <div class="post-event-overlay context-dark"><a href="apply" class="btn btn-primary">Book Now</a>
                      <div class="offset-top-20"><a href="event-page" class="btn btn-default">Learn More</a></div>
                    </div>
                  </div>
                  <div class="unit unit-lg unit-lg-horizontal">
                    <div class="unit-left">
                      <div class="post-event-meta text-center">
                        <div class="h3 text-bold reveal-inline-block reveal-lg-block">31</div>
                        <p class="reveal-inline-block reveal-lg-block">September</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                      </div>
                    </div>
                    <div class="unit-body">
                      <div class="post-event-body text-lg-left">
                        <h6><a href="event-page">Spacewalking Conference</a></h6>
                        <ul class="list-inline list-inline-xs">
                          <li><a href="team-member-profile"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-sm-top-0">
                <article class="post-event">
                  <div class="post-event-img-overlay"><img src="images/blog/events-02-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                    <div class="post-event-overlay context-dark"><a href="apply" class="btn btn-primary">Book Now</a>
                      <div class="offset-top-20"><a href="event-page" class="btn btn-default">Learn More</a></div>
                    </div>
                  </div>
                  <div class="unit unit-lg unit-lg-horizontal">
                    <div class="unit-left">
                      <div class="post-event-meta text-center">
                        <div class="h3 text-bold reveal-inline-block reveal-lg-block">5</div>
                        <p class="reveal-inline-block reveal-lg-block">July</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                      </div>
                    </div>
                    <div class="unit-body">
                      <div class="post-event-body text-lg-left">
                        <h6><a href="event-page">International Conference on Biomolecular Engineering</a></h6>
                        <ul class="list-inline list-inline-xs">
                          <li><a href="team-member-profile"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Raymond Salazar</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-xl-top-0">
                <article class="post-event">
                  <div class="post-event-img-overlay"><img src="images/blog/events-03-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                    <div class="post-event-overlay context-dark"><a href="apply" class="btn btn-primary">Book Now</a>
                      <div class="offset-top-20"><a href="event-page" class="btn btn-default">Learn More</a></div>
                    </div>
                  </div>
                  <div class="unit unit-lg unit-lg-horizontal">
                    <div class="unit-left">
                      <div class="post-event-meta text-center">
                        <div class="h3 text-bold reveal-inline-block reveal-lg-block">15</div>
                        <p class="reveal-inline-block reveal-lg-block">June</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                      </div>
                    </div>
                    <div class="unit-body">
                      <div class="post-event-body text-lg-left">
                        <h6><a href="event-page">Graphic Design Workshop</a></h6>
                        <ul class="list-inline list-inline-xs">
                          <li><a href="team-member-profile"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Bruce Hawkins</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="cell-sm-6 cell-md-5 cell-xl-3 offset-top-50 offset-xl-top-0">
                <article class="post-event">
                  <div class="post-event-img-overlay"><img src="images/blog/events-04-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                    <div class="post-event-overlay context-dark"><a href="apply" class="btn btn-primary">Book Now</a>
                      <div class="offset-top-20"><a href="event-page" class="btn btn-default">Learn More</a></div>
                    </div>
                  </div>
                  <div class="unit unit-lg unit-lg-horizontal">
                    <div class="unit-left">
                      <div class="post-event-meta text-center">
                        <div class="h3 text-bold reveal-inline-block reveal-lg-block">5</div>
                        <p class="reveal-inline-block reveal-lg-block">June</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                      </div>
                    </div>
                    <div class="unit-body">
                      <div class="post-event-body text-lg-left">
                        <h6><a href="event-page">History of Art</a></h6>
                        <ul class="list-inline list-inline-xs">
                          <li><a href="team-member-profile"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Danielle Garza</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="offset-top-50 offset-lg-top-56"><a href="calendar" class="btn btn-icon btn-icon-right btn-primary"><span class="icon fa-arrow-right"></span><span>View Event Calendar</span></a></div>
          </div>
        </section>
        -->
        <!-- Testimonials-->
        <!--
        <section class="bg-madison context-dark">
          <div data-items="1" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev fa-angle-left&quot;, &quot;owl-next fa-angle-right&quot;]" class="owl-carousel owl-carousel-default veil-xl-owl-dots veil-owl-nav reveal-xl-owl-nav">
            <div>
              <div class="shell section-70 section-xl-100 section-xl-bottom-114">
                <div class="range range-xs-center range-xs-middle">
                  <div class="cell-sm-3 text-sm-right cell-sm-push-2"><img src="images/users/user-debra-banks-230x230.jpg" width="230" height="230" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                  <div class="cell-sm-9 cell-sm-push-1">
                    <div class="quote-classic-boxed text-left">
                      <div class="quote-body">
                        <q>When you work full-time while studying, you need to sacrifice personal time, which meant that I took my studies seriously. My ambition was not only to complete my degree successfully but to make the best out of the time spent studying.</q>
                        <div class="offset-top-30 text-right">
                          <cite class="font-accent">Debra Banks</cite>
                          <div class="offset-top-5">
                            <p class="text-dark text-italic">Diploma for Graduates in Management, USA</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="shell section-70 section-xl-100 section-xl-bottom-114">
                <div class="range range-xs-center range-xs-middle">
                  <div class="cell-sm-3 text-sm-right cell-sm-push-2"><img src="images/users/user-steven-alvarez-230x230.jpg" width="230" height="230" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                  <div class="cell-sm-9 cell-sm-push-1">
                    <div class="quote-classic-boxed text-left">
                      <div class="quote-body">
                        <q>When I researched the programmes available I realized that the University was offering exactly the type of programme in international development that interested me.</q>
                        <div class="offset-top-30 text-right">
                          <cite class="font-accent">Steven Alvarez</cite>
                          <div class="offset-top-5">
                            <p class="text-dark text-italic">Diploma for Graduates in Management, USA</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        -->
        <!-- Latest news-->
        <!--
        <section class="bg-catskill">
          <div class="shell section-70 section-md-114">
            <h2 class="text-bold">Latest News</h2>
            <hr class="divider bg-madison">
            <div class="range offset-top-60 text-left range-xs-center">
              <div class="cell-sm-6 cell-md-4">
                <article class="post-news"><a href="news-post-page"><img src="images/blog/news-01-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
                  <div class="post-news-body">
                    <h6><a href="news-post-page">Liberal Arts Colleges Rankings</a></h6>
                    <div class="offset-top-20">
                      <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>
                    </div>
                    <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                  </div>
                </article>
                <div class="offset-top-30">
                  <article class="post-news"><a href="news-post-page"><img src="images/blog/news-04-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
                    <div class="post-news-body">
                      <h6><a href="news-post-page">
                          Ways Parents and Counselors Can
                          Help Students Earn Scholarships</a></h6>
                      <div class="offset-top-20">
                        <p>Securing scholarships can be stressful, but parents and counselors can serve as a resource.</p>
                      </div>
                      <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0">
                <article class="post-news"><a href="news-post-page"><img src="images/blog/news-02-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
                  <div class="post-news-body">
                    <h6><a href="news-post-page">10 Law Schools Where the Most Accepted Students Enroll</a></h6>
                    <div class="offset-top-20">
                      <p>At these schools, at least 42 percent of accepted students enrolled in fall 2015, U.S. News data show.</p>
                    </div>
                    <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                  </div>
                </article>
                <div class="offset-top-30">
                  <article class="post-news"><a href="news-post-page"><img src="images/blog/news-05-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
                    <div class="post-news-body">
                      <h6><a href="news-post-page">
                          Consider MBA Programs That
                          Offer Summer Prep</a></h6>
                      <div class="offset-top-20">
                        <p>Summer preparatory programs offered through schools allow students to get a head start on making connections and building skills.</p>
                      </div>
                      <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="cell-sm-12 cell-md-4 offset-top-30 offset-md-top-0">
                <div class="range">
                  <div class="cell-sm-6 cell-md-12">
                    <article class="post-news"><a href="news-post-page"><img src="images/blog/news-03-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
                      <div class="post-news-body">
                        <h6><a href="news-post-page">5 Ways to Pay for Community College</a></h6>
                        <div class="offset-top-20">
                          <p>Many community colleges offer promise programs, which offer tuition-free awards to eligible students – mainly to students with Pell grant eligibility.</p>
                        </div>
                        <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                      </div>
                    </article>
                  </div>
                  <div class="cell-sm-6 cell-md-12 offset-top-30 offset-sm-top-0 offset-md-top-30">
                    <article class="post-news"><a href="news-post-page"><img src="images/blog/news-06-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
                      <div class="post-news-body">
                        <h6><a href="news-post-page">Studying in the United States</a></h6>
                        <div class="offset-top-20">
                          <p>International students increasingly want to come to the United States for college or graduate school.</p>
                        </div>
                        <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-top-50"><a href="modern-news" class="btn btn-primary">View All News Posts</a></div>
          </div>
        </section>
        <!-- Gallery-->
        <!--
        <section>
          <div data-items="1" data-xs-items="2" data-sm-items="4" data-xl-items="6" data-nav="false" data-dots="false" data-mouse-drag="true" data-photo-swipe-gallery="" data-flickr-tags="59029" data-stage-padding="30" data-xl-stage-padding="0" class="owl-carousel flickr"><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_n="src"><span class="icon fa-search-plus"></span></a><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_n="src"><span class="icon fa-search-plus"></span></a><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_n="src"><span class="icon fa-search-plus"></span></a><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_n="src"><span class="icon fa-search-plus"></span></a><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_n="src"><span class="icon fa-search-plus"></span></a><a data-photo-swipe-item="" href="" data-image_c="href" data-size="320x320" data-type="flickr-item" class="thumbnail-default"><img width="320" height="320" data-title="alt" src="images/_blank.png" alt="" data-image_n="src"><span class="icon fa-search-plus"></span></a></div>
        </section>
        <!-- Google map-->
         <section>
          <!-- RD Google Map-->
          <div class="rd-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15024.921603438474!2d-101.1948682!3d19.7028126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x27434b495acac0ad!2sCentro+Cultural+Universitario!5e0!3m2!1ses-419!2smx!4v1547053986538" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <ul class="rd-google-map__locations">
              <li data-x="-101.1948682" data-y="19.7028126">

                <p><a href="https://www.google.com.mx/maps/place/Centro+Educaci%C3%B3n+Continua+Ing.+Eugenio+M%C3%A9ndez+Docurro/@19.4384059,-99.1403946,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1f92c24dc4037:0x706eaa77a7f0e9e4!8m2!3d19.4384009!4d-99.1382059">
                Centro de Educación Continua Ing. Eugenio Méndez Docurro</a>
</p>

              </li>
            </ul>
          </div>
        </section>
      </main>
      <!-- Corporate footer-->
       <!-- Corporate footer-->
<?php
include_once 'templates/footer.php';
?>
