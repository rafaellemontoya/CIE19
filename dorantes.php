<?php
include_once 'templates/header.php';
?>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block"><?php echo $lang_ponente5['nombre_ponente']?></h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="index"><?php echo $lang_header['inicio']?></a></li>
              <li><a href="index"><?php echo $lang_ponente5['nombre_ponente']?></a>
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
                      <li><h3 style="text-align: center; color: #004e9a; ">Dr. Rubén Dorantes Rodríguez </h3></li>
                      <li><h3 style="text-align: center;color:  #004e9a;">Conferencia</h3></li>
                    </ul>
                    <div data-group="tabs-group-default" class="resp-tabs-container text-sm-left tabs-group-default">
                      <div>
                        <p style="font-size: 1.3em;">
                          <?php echo $lang_ponente5['biografia']?>



                        </p>
                      </div>
                      <div>
                        <p>
                        <h4 style="color: #004e9a "><?php echo $lang_ponente5['titulo_ponencia']?></h4>
                        <?php echo $lang_ponente5['resumen_biografia']?>

</p>
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
