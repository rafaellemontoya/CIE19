<?php
include_once 'templates/header.php';
?>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block"><?php echo $lang_header['costos']?></h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="index"><?php echo $lang_header['inicio']?></a></li>
              <li><?php echo $lang_header['costos']?>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content section-70 section-md-114">
        <!-- horizontal link Tabs-->
        <section>
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-xs-10 cell-lg-8">
                <div class="offset-top-50">
                  <!-- Responsive-tabs-->
                  <div data-type="horizontal" class="responsive-tabs responsive-tabs-classic horizontal">
                    <ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default">
                      <li><h3 style="text-align: center; color: #004e9a; "><?php echo $lang_costos['inscripcion']?> </h3></li>
                      <li><h3 style="text-align: center;color:  #004e9a;"><?php echo $lang_costos['talleres']?></h3></li>
                      <li><h3 style="text-align: center;color:  #004e9a;"><?php echo $lang_costos['programa_cultural']?></h3></li>
                    </ul>
                    <div data-group="tabs-group-default" class="resp-tabs-container text-sm-left tabs-group-default">
                      <div>
                        <p style="font-size: 1.3em;">
                        <?php echo $lang_costos['titulo_1']?>
                        <ul>

							<li><?php echo $lang_costos['incluye_1']?></li>
							<li><?php echo $lang_costos['incluye_2']?></li>
							<li><?php echo $lang_costos['incluye_3']?></li>
							<li><?php echo $lang_costos['incluye_4']?></li>
							<li><?php echo $lang_costos['incluye_5']?></li>
							<li><?php echo $lang_costos['incluye_6']?></li>

                        </ul>

<h4 style="color: #004e9a; ">
<?php echo $lang_costos['titulo_2']?>
</h4>
<?php echo $lang_costos['estudiantes_31jul']?><br>
<?php echo $lang_costos['profesionales_31jul']?><br>
<h4 style="color: #004e9a ">
A partir del 1 de Agosto
</h4>
<?php echo $lang_costos['estudiantes_1Ago']?><br>
<?php echo $lang_costos['profesionales_1Ago']?><br>
<h5>
<?php echo $lang_costos['grupos']?>
</h5>
                        </p>
                      </div>
                      <div>
                        <p>
                        <h4 style="color: #004e9a "><?php echo $lang_costos['costo_taller_publico_general']?></h4>
                        <h4 style="color: #004e9a "><?php echo $lang_costos['costo_taller_profesionistas']?></h4>
                        <h4 style="color: #004e9a "><?php echo $lang_costos['costo_taller_estudiantes']?></h4>

                        <!-- <div class="offset-top-30"><a href="talleres" class="btn btn-icon btn-icon-right btn-default"><span class="icon fa-arrow-right"></span><span>Más información</span></a></div> -->


                      </div>
                      <div>
                        <!-- <p>Visita guiada al Museo Nacional de Arte (MUNAL) de la Ciudad de México el día 7 de septiembre a las 18:00 (Donativo $150 M.N.)
</p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- vertical link Tabs-->
        <!-- Horizontal button Tabs-->
        <!-- Vertical button Tabs-->
        <!-- Accordion-->
      </main>
      <!-- Page Footer-->
      <!-- Corporate footer-->
<?php
include_once 'templates/footer.php';
?>
