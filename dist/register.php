<?php include "inc/head.inc"; ?>
<div class="page-register">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="register-form section-padding section-light-gray">
		<div class="register-form-heading heading-padding text-center">
			<h1 class="section-title"><span class="yellow-left-line"></span>Crea el teu compte d'usuari</h1>
		</div>
		<div class="register-form-body">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="cell small-12 medium-6 large-4">
						<div class="register-form-block">
							<div class="form-block-heading text-center">
								<h2>Introdueix les teves dades</h2>
							</div>
							<div class="form-block-image text-center">
								<img src="images/icons/register-icon.png" alt="Introdueix les teves dades">
							</div>
							<form id="register-form" action="" method="POST">
								<div class="form-message alert">Les contrassenyes no són iguals</div>
								<label class="show-for-sr">Email</label>
								<input type="email" name="email" value="" placeholder="Introdueix el teu email" required>
								<label class="show-for-sr">Tria una clau d'accés</label>
								<input type="password" class="error" name="password" value="" placeholder="Tria una clau d'accés" required>
								<input type="password" class="error" name="validate-password" value="" placeholder="Torna a introduïr la contrassenya" required>
								<button type="submit" class="button expanded">Crear compte</button>
								<div class="grid-x">
									<div class="cell small-12 text-left">
										<label><input type="checkbox" name="remember-session">Recorda'm</label>
									</div>
								</div>
							</form>
							<div class="text-center">
								<h3>ja tens un compte?</h3>
								<a href="#" class="blue-link">Accedir <i class="fa fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="event-more section-padding section-primary section-padding">
		<div class="row">
			<div class="column text-center aling-center">
				<a href="#" class="button button-dark">Veure tots els espectacles</a>
			</div>
		</div>
	</section>
	<?php include "inc/footer.inc"; ?>
</div>
<?php include "inc/bottom.inc"; ?>