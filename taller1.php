<?php
include_once 'templates/header.php';
?>
		<!-- Classic Breadcrumbs-->
		<section class="breadcrumb-classic context-dark">
			<div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
				<h1 class="veil reveal-sm-block"><?echo $lang_talleres['titulo_taller1']?></h1>
				<div class="offset-sm-top-35">
					<ul class="list-inline list-inline-lg list-inline-dashed p">
						<li><a href="index"><?echo $lang_header['inicio']?></a></li>
						<li ><a href="talleres"><?echo $lang_header['talleres']?></a></li>
						<li><?echo $lang_talleres['titulo_taller1']?></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Content-->
		<main class="page-content section-70 section-md-114">
			<!-- horizontal link Tabs-->
			<!-- Vertical button Tabs-->
				<div class="shell">
					<div class="range range-xs-center">
						<div class="cell-xs-10 cell-lg-12">
							<h2 class="text-bold"><?echo $lang_talleres['titulo_taller1']?> </h2>
							<hr class="divider bg-madison">
							<div class="offset-top-60">
								<!-- Responsive-tabs-->
								<div data-type="vertical" class="responsive-tabs responsive-tabs-boxed vertical">
									<ul data-group="tabs-group-default" class="resp-tabs-list text-center tabs-group-default">
										<li><?echo $lang_talleres['caracteristicas']?></li>
										<li><?echo $lang_talleres['ponentes_taller1']?> </li>
										<li><?echo $lang_talleres['contenido']?></li>
									</ul>

										<div data-group="tabs-group-default" class="resp-tabs-container text-left tabs-group-default">
										<!-- Características -->
										<div>
											 <ul>
											<li>
											<?echo $lang_talleres['fecha']?>: <?echo $lang_talleres['fecha_taller1']?>
											</li>
											<li>
													<?echo $lang_talleres['horario']?>: <?echo $lang_talleres['horario_taller1']?>
											</li>
											<li>
												<?echo $lang_costos['costo_taller_publico_general']?>
											</li>
											<li>
												<?echo $lang_costos['costo_taller_profesionistas']?>
											</li>
											<li>
												<?echo $lang_costos['costo_taller_estudiantes']?>
											</li>

										</ul>

										</div>

										<!-- Características -->

										<div>
										<h3><?echo $lang_talleres['impartido']?> <strong><?echo $lang_talleres['ponentes_taller1']?></strong></h3>
											<?echo $lang_talleres['uam']?>
											<h3><?echo $lang_talleres['perfil']?></h3>

						<?echo $lang_talleres['cvu_taller1']?>

										</div>
										<div>
										<ol>
											<?echo $lang_talleres['contenido_taller1']?>
										</ol>


										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- Accordion-->
		</main>
		<!-- Page Footer-->
		<!-- Corporate footer-->
<?php
include_once 'templates/footer.php';
?>
