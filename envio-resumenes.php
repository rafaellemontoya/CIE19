<?php
include_once 'templates/header.php';
?>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block"><?php echo $lang_envio_resumenes['resumenes']?></h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="index.html"><?php echo $lang_header['inicio']?></a></a></li>
              <li><?php echo $lang_envio_resumenes['resumenes']?>
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
              </div>
              <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                <div class="offset-top-30 offset-sm-top-60">
                   <h2>
                  <a href="https://easychair.org/conferences/?conf=iec20191" >
                  		 <?php echo $lang_envio_resumenes['instrucciones']?>
                   </a>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </section>
        <a class="btn btn-icon btn-icon-right btn-primary" href="https://easychair.org/conferences/?conf=iec20191">
			<span class="icon fa-arrow-right"></span>
			<span><?php echo $lang_envio_resumenes['subir_resumenes']?></span>
			</a>
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
