<?php include "inc/head.inc"; ?>
<div class="page-login">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="login-form section-padding section-light-gray">
		<div class="login-form-heading heading-padding text-center">
			<h1 class="section-title"><span class="yellow-left-line short"></span>Recuperar la meva contrassenya</h1>
		</div>
		<div class="login-form-body">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="cell small-12 medium-6 large-4">
						<div class="login-form-block">
							<div class="form-block-heading text-center">
								<h2>Introdueix la nova contrassenya</h2>
							</div>
							<div class="form-block-image text-center">
								<img src="images/icons/login-icon.png" alt="Introdueix les teves dades">
							</div>
							<form id="password-recovery-form" action="" method="POST">
								<div class="form-message alert">Les contrassenyes no coincideixen</div>
								<label class="show-for-sr">Nova clau d'accés</label>
								<input type="password" class="error" name="password" value="" placeholder="Nova clau d'accés" required>
								<label class="show-for-sr">Repeteix la clau d'accés</label>
								<input type="password" class="error" name="password-verify" value="" placeholder="Repeteix la clau d'accés" required>
								<button type="submit" class="button expanded">Canvia</button>
							</form>
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