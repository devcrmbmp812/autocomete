

				<!-- Header -->
				<div class="template-header">
<?php
		Template::includeTemplateHeaderTop();
?>
					<div class="template-header-bottom">
						<?php Template::includeFile('slider'); ?>
					</div>

				</div>

				<!-- Content -->
				<div class="template-content">

					<!-- Section -->
					<div class="template-section template-section-padding-1 template-clear-fix template-main">

						<!-- Header + subheader -->
						<div class="template-component-header-subheader">
							<h2>À Propos d'Auto Comète</h2>
							<div></div>
							<span>Service de lavage &amp; et d'esthètique</span>
						</div>

						<!-- Layout 33x66% -->
						<div class="template-layout-33x66 template-clear-fix">

							<!-- Left column -->
							<div class="template-layout-column-left">
								<img src="media/image/sample/460x678/image_01.jpg" alt=""/>
							</div>

							<!-- Right column -->
							<div class="template-layout-column-right">

								<!-- Text -->
								<p class="template-padding-reset">

                Nous sommes une compagnie de service de lavage à domicile ou au travail. Nous offrons les mêmes services que le lave-auto conventionnel mais sans déplacement, sans file d’attente et cela, dans le confort de votre maison ou pendant le travail. Nous avons notre eau et notre électricité dans la plupart de nos camions donc 100% autonome. Nous nous déplaçons dans la grande région de Montréal et ses environs (Rive-Sud, Rive-Nord,Repentigny, Terrebonne et autres). Nous offrons également le service durant l’hiver pour les garages résidentiels ou commerciaux. Nous lavons aussi les motos, bateau, avion, roulotte, machinerie lourde et autres.
                <br><br>
                Au plaisir et à bientôt!
								</p>

								<!-- Feature list -->
								<div class="template-component-feature-list template-component-feature-list-position-top template-clear-fix">

									<!-- Layout 50x50% -->
									<ul class="template-layout-50x50 template-clear-fix">

										<!-- Left column -->
										<li class="template-layout-column-left template-margin-bottom-reset">
											<div class="template-component-space template-component-space-2"></div>
											<span class="template-icon-feature-water-drop"></span>
											<h5>Le meilleur lavage de voiture</h5>
											<ul class="template-component-list">
												<li><span class="template-icon-meta-check"></span>Nous offrons plusieurs services à un prix avantageux</li>
												<li><span class="template-icon-meta-check"></span>Emplacements multiples de lavage de voiture à travers Portland</li>
												<li><span class="template-icon-meta-check"></span>Produits biodégradables et écologiques</li>
												<li><span class="template-icon-meta-check"></span>Des membres de l'équipe de lavage de voitures qualifiés et qualifiés</li>
											</ul>
										</li>

										<!-- Right column -->
										<li class="template-layout-column-right template-margin-bottom-reset">
											<div class="template-component-space template-component-space-2"></div>
											<span class="template-icon-feature-user-chat"></span>
											<h5>Nous contacter</h5>
											<ul class="template-component-list">
												<li><span class="template-icon-meta-check"></span>Nous sommes une entreprise très ouverte et facile à atteindre</li>
												<li><span class="template-icon-meta-check"></span>Notre email est vérifié toutes les heures pendant la journée</li>
												<li><span class="template-icon-meta-check"></span>Prenez rendez-vous en ligne en moins de 3 minutes</li>
												<li><span class="template-icon-meta-check"></span>Notre numéro de téléphone sera répondu</li>
											</ul>
										</li>

									</ul>

								</div>

							</div>

						</div>

					</div>

					<!-- Section -->
					<div class="template-section template-section-padding-reset template-clear-fix template-background-color-1">

						<!-- Call to action -->
						<div class="template-component-call-to-action">
							<div class="template-main">
								<h3>No 1. Lave-Auto à domicile</h3>
								<a href="<?php Template::getPageURL('book-your-wash'); ?>" class="template-component-button">Réserver Maintenant</a>
							</div>
						</div>

					</div>

					<!-- Section -->
					<div class="template-section template-background-image template-background-image-5 template-background-image-parallax template-color-white template-clear-fix">

						<!-- Mian -->
						<div class="template-main">

							<!-- Header + subheader -->
							<div class="template-component-header-subheader">
								<h2>Notre Procès</h2>
								<div></div>
								<span>Nous savons que votre temps est précieux</span>
							</div>

							<!-- Space -->
							<div class="template-component-space template-component-space-1"></div>

							<!-- Process list -->
							<div class="template-component-process-list template-clear-fix">

								<!-- Layout 25x25x25x25% -->
								<ul class="template-layout-25x25x25x25 template-clear-fix template-layout-margin-reset">

									<!-- Left column -->
									<li class="template-layout-column-left">
										<span class="template-icon-feature-check"></span>
										<h5>1. Réservation</h5>
										<span class="template-icon-meta-arrow-large-rl"></span>
									</li>

									<!-- Center left column -->
									<li class="template-layout-column-center-left">
										<span class="template-icon-feature-car-check"></span>
										<h5>2. Inspection</h5>
										<span class="template-icon-meta-arrow-large-rl"></span>
									</li>

									<!-- Center right column -->
									<li class="template-layout-column-center-right">
										<span class="template-icon-feature-payment"></span>
										<h5>3. Évaluation</h5>
										<span class="template-icon-meta-arrow-large-rl"></span>
									</li>

									<!-- Right column -->
									<li class="template-layout-column-right">
										<span class="template-icon-feature-vacuum-cleaner"></span>
										<h5>4. Achèvement</h5>
									</li>

								</ul>

							</div>

						</div>


					</div>

					<!-- Section -->
					<div class="template-section template-section-padding-1 template-clear-fix template-main">

						<!-- Header + subheader -->
						<div class="template-component-header-subheader">
							<h2>FORFAITS DE LAVAGE</h2>
							<div></div>
							<span>Quel lavage est le meilleur pour votre véhicule?</span>
						</div>

						<!-- Booking -->
						<div class="template-component-booking" id="template-booking">

							<form>

								<ul>

									<?php Template::includeFile('booking-vehicle-list-2'); ?>
									<?php Template::includeFile('booking-package-list-2'); ?>

								</ul>

							</form>

						</div>

						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$('#template-booking').booking();
							});
						</script>

					</div>



					<!-- Section -->
					<div class="template-section template-clear-fix template-main">

						<!-- Header + subheader -->
						<div class="template-component-header-subheader">
							<h2>Latest Projects</h2>
							<div></div>
							<span>Car wash gallery</span>
						</div>

						<?php Template::includeFile('gallery-1'); ?>

						<!-- Button -->
						<div class="template-align-center">
							<a href="<?php Template::getPageURL('gallery'); ?>" class="template-component-button">Browse More Pictures</a>
						</div>

					</div>


					<!-- Section -->
					<div class="template-section template-section-padding-1 template-clear-fix template-main">

						<!-- Features list -->
						<div class="template-component-feature-list template-component-feature-list-position-left template-clear-fix">

							<!-- Layout 33x33x33% -->
							<ul class="template-layout-33x33x33 template-clear-fix">

								<!-- Left column -->
								<li class="template-layout-column-left">
									<span class="template-icon-feature-phone-circle"></span>
									<h5>Call Us At</h5>
									<p>
										(514) 709-9274<br/>
									</p>
								</li>

								<!-- Center column -->
								<li class="template-layout-column-center">
									<span class="template-icon-feature-location-map"></span>
									<h5>Our Address</h5>
									<p>
                  Montréal
									</p>
								</li>






								<!-- Right column -->
								<li class="template-layout-column-right">
									<span class="template-icon-feature-clock"></span>
									<h5>Working hours</h5>
									<p>
                    24/7
									</p>
								</li>

							</ul>
						</div>

					</div>

					<!-- Google Maps -->
					<div class="template-section template-section-padding-reset template-clear-fix">
 <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d178784.32615658134!2d-73.85161209762602!3d45.560280436405385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a541c64b70d%3A0x654e3138211fefef!2sMontreal%2C+QC!5e0!3m2!1sen!2sca!4v1459479823208" width="100%" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
					</div>

				</div>
