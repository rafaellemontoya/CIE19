<?php
include_once 'templates/header.php';
?>
		<!-- Classic Breadcrumbs-->
		<section class="breadcrumb-classic context-dark">
			<div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
				<h1 class="veil reveal-sm-block"><?echo $lang_header['talleres']?></h1>
				<div class="offset-sm-top-35">
					<ul class="list-inline list-inline-lg list-inline-dashed p">
						<li><a href="index"><?echo $lang_header['inicio']?></a></li>
						<li><?echo $lang_header['talleres']?></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Content-->
		<main class="page-content section-10 section-md-114"> <!-- horizontal link Tabs-->
		<!-- Accordion-->
		<h3>
			<?echo $lang_talleres['cupo']?>
		</h3>
		<section class="offset-top-10 offset-md-top-114">
			<div class="shell">
				<div class="range range-xs-center">
					<div class="cell-xs-10 cell-lg-8">
						<div class="offset-top-0">
							<!-- Classic Accordion-->
							<div data-type="accordion"
								class="responsive-tabs responsive-tabs-classic">
								<ul data-group="tabs-group-default"
									class="resp-tabs-list tabs-group-default">
									<li><?echo $lang_talleres['titulo_taller1']?></li>
									<li><?echo $lang_talleres['titulo_taller2']?></li>
									<li><?echo $lang_talleres['titulo_taller3']?></li>
									<li><?echo $lang_talleres['titulo_taller4']?></li>
									<li><?echo $lang_talleres['titulo_taller5']?></li>
									<li><?echo $lang_talleres['titulo_taller6']?></li>
									<li><?echo $lang_talleres['titulo_taller7']?></li>
									<li><?echo $lang_talleres['titulo_taller8']?></li>
									<li><?echo $lang_talleres['titulo_taller9']?></li>
								</ul>


								<div data-group="tabs-group-default"
									class="resp-tabs-container tabs-group-default">
									<div>
										<p style="text-align: center;">
											<?echo $lang_talleres['ponentes_taller1']?><br>
											 <?echo $lang_talleres['uam']?><br>
											 <?echo $lang_talleres['duracion_taller1']?><br>
											<?echo $lang_talleres['idioma_taller1']?><br>
										</p>
										<div style="text-align: center;">
											<a href="taller1"
												class="btn btn-primary btn-ellipse"><?echo $lang_index['mas_info']?></a>
										</div>
									</div>
									<div>
										<p style="text-align: center;">
											<?echo $lang_talleres['ponentes_taller2']?><br>
											 <?echo $lang_talleres['uam']?><br>
											 <?echo $lang_talleres['duracion_taller2']?><br>
											<?echo $lang_talleres['idioma_taller2']?><br>
										</p>
										<div style="text-align: center;">
											<a href="taller2"
												class="btn btn-primary btn-ellipse"><?echo $lang_index['mas_info']?></a>
										</div>
									</div>

									<div>
										<p style="text-align: center;">
											<?echo $lang_talleres['ponentes_taller3']?><br>
											 <?echo $lang_talleres['adscripcion_taller3']?><br>
											 <?echo $lang_talleres['duracion_taller3']?><br>
											<?echo $lang_talleres['idioma_taller3']?><br>
										</p>
										<div style="text-align: center;">
											<a href="taller3"
												class="btn btn-primary btn-ellipse"><?echo $lang_index['mas_info']?></a>
										</div>
									</div>
									<div>
										<p style="text-align: center;">
											<?echo $lang_talleres['ponentes_taller4']?><br>
											 <?echo $lang_talleres['uam']?><br>
											 <?echo $lang_talleres['duracion_taller4']?><br>
											<?echo $lang_talleres['idioma_taller4']?><br>
										</p>
										<div style="text-align: center;">
											<a href="taller4"
												class="btn btn-primary btn-ellipse"><?echo $lang_index['mas_info']?></a>
										</div>
									</div>
									<div>
										<p style="text-align: center;">
											<?echo $lang_talleres['ponentes_taller5']?><br>
											 <?echo $lang_talleres['adscripcion_taller5']?><br>
											 <?echo $lang_talleres['duracion_taller5']?><br>
											<?echo $lang_talleres['idioma_taller5']?><br>
										</p>
										<div style="text-align: center;">
											<a href="taller5"
												class="btn btn-primary btn-ellipse"><?echo $lang_index['mas_info']?></a>
										</div>
									</div>
									<div>
										<p style="text-align: center;">
											<?echo $lang_talleres['ponentes_taller6']?><br>
											 <?echo $lang_talleres['adscripcion_taller6']?><br>
											 <?echo $lang_talleres['duracion_taller6']?><br>
											<?echo $lang_talleres['idioma_taller6']?><br>
										</p>
										<div style="text-align: center;">
											<a href="taller6"
												class="btn btn-primary btn-ellipse"><?echo $lang_index['mas_info']?></a>
										</div>
									</div>
									<div>
										<p style="text-align: center;">
											<?echo $lang_talleres['ponentes_taller7']?><br>
											 <?echo $lang_talleres['adscripcion_taller7']?><br>
											 <?echo $lang_talleres['duracion_taller7']?><br>
											<?echo $lang_talleres['idioma_taller7']?><br>
										</p>
										<div style="text-align: center;">
											<a href="taller7"
												class="btn btn-primary btn-ellipse"><?echo $lang_index['mas_info']?></a>
										</div>
									</div>
									<div>
										<p style="text-align: center;">
											<?echo $lang_talleres['ponentes_taller8']?><br>
											 <?echo $lang_talleres['adscripcion_taller8']?><br>
											 <?echo $lang_talleres['duracion_taller8']?><br>
											<?echo $lang_talleres['idioma_taller8']?><br>
										</p>
										<div style="text-align: center;">
											<a href="taller8"
												class="btn btn-primary btn-ellipse"><?echo $lang_index['mas_info']?></a>
										</div>
									</div>
									<div>
										<p style="text-align: center;">
											<?echo $lang_talleres['ponentes_taller9']?><br>
											 <?echo $lang_talleres['adscripcion_taller9']?><br>
											 <?echo $lang_talleres['duracion_taller9']?><br>
											<?echo $lang_talleres['idioma_taller9']?><br>
										</p>
										<div style="text-align: center;">
											<a href="taller9"
												class="btn btn-primary btn-ellipse"><?echo $lang_index['mas_info']?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Accordion--> </main>
		<!-- Page Footer-->
		<!-- Corporate footer-->
<?php
include_once 'templates/footer.php';
?>
