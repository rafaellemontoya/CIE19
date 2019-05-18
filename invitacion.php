<?php
include_once 'templates/header.php';
?>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block"><?php echo $lang_header['invitacion']?></h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="index"><?php echo $lang_header['inicio']?></a></li>
              <li><?php echo $lang_header['invitacion']?>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <!--A Meeting of Minds-->
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range">
              <div class="cell-sm-4 cell-sm-push-2 text-sm-left">
                <div class="inset-sm-left-30"><img src="images/sede2.jpg" width="340" height="300" alt="" class="img-responsive reveal-inline-block img-rounded">
                  <div class="offset-top-20">
                    <h6 class="text-primary text-bold">Centro Cultural Universitario, de la Universidad Michoacana de San Nicolás de Hidalgo </h6>
                  </div>
                  <p>Sede del <? echo $lang_header['titulo'];?>.</p>
                </div>
              </div>
              <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                <h2 class="text-bold"><? echo $lang_invitacion['bienvenido'];?></h2>
                <hr class="divider bg-madison hr-sm-left-0">
                <div class="offset-top-30 offset-sm-top-60">
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
                    <?php echo $lang_index['texto_invitacion_2']; ?>
<!-- Entre las actividades del Congreso se contará con la participación de plenaristas a nivel internacional como el Dr. Hugo De Lasa de la Universidad de Western Ontario, Canadá; el Dr. Ian Metcalfe de la Universidad de Newcastel, Inglaterra,  Raf Dewil de la Universidad de Lueven, Bélgica; el Dr D’angelo, de Italia, el Dr.  Héctor  Poggi Varaldo del Departamento de Biotecnología y Bioingeniería de Centro de Investigación y de Estudios Avanzados del Instituto Politécnico Nacional, México; el Dr. Jorge Islas Samperio del Instituto de Energías Renovables, México; el Dr. Omar Solorza del  Centro de Investigación y de Estudios Avanzados del Instituto Politécnico Nacional, México y al Dr. Rubén Dorantes Rodríguez de la Universidad Autónoma Metropolitana.<br><br> -->
<!-- Además se ofrecerán talleres previos al Congreso donde se impartirán cursos.<br> -->


                  </p>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Images-->
        <section>
          <div class="shell-wide">
            <div class="range">
            <!--
              <div class="cell-sm-4"><img src="images/history-01-570x370.jpg" width="570" height="370" alt="" class="img-responsive reveal-inline-block"></div>
              <div class="cell-sm-4"><img src="images/history-02-570x370.jpg" width="570" height="370" alt="" class="img-responsive reveal-inline-block"></div>
              <div class="cell-sm-4"><img src="images/history-03-570x370.jpg" width="570" height="370" alt="" class="img-responsive reveal-inline-block"></div>
               -->
            </div>
          </div>
        </section>
        <!--A Meeting of Minds-->
      </main>
      <!-- Page Footer-->
      <!-- Corporate footer-->
<?php
include_once 'templates/footer.php';
?>
