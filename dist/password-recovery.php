<?php include "inc/head.inc"; ?>
<div class="page-password-recovery">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="password-recovery-form section-padding section-light-gray">
		<div class="password-recovery-form-heading heading-padding text-center">
			<h1 class="section-title"><span class="yellow-left-line"></span>Recuperar el meu compte</h1>
		</div>
		<div class="password-recovery-form-body">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="cell small-12 medium-6 large-4">
						<div class="password-recovery-form-block">
							<div class="form-block-heading text-center">
								<h2>Introdueix les teves dades</h2>
							</div>
							<div class="form-block-image text-center">
								<img src="images/icons/login-image.png" alt="Introdueix les teves dades">
							</div>
							<form id="password-recovery-form" action="" method="POST">
								<div class="form-message alert">No hem trobat el teu email a la base de dades</div>
								<label class="show-for-sr">Introdueix el teu email</label>
								<input type="email" name="email" value="" placeholder="Introdueix el teu email" required>
								<button type="submit" class="button expanded">Recorda'm la clau d'accés</button>
							</form>
							<div class="text-center">
								<h3>Encara no tens un compte?</h3>
								<a href="#" class="blue-link">Crear un compte <i class="fa fa-chevron-right"></i></a>
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