<?php include "inc/head.inc"; ?>
<div class="page-login">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="login-form section-padding section-light-gray">
		<div class="login-form-heading heading-padding text-center">
			<h1 class="section-title"><span class="yellow-left-line"></span>Accés d'usuaris</h1>
		</div>
		<div class="login-form-body">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="cell small-12 medium-6 large-4">
						<div class="login-form-block">
							<div class="form-block-heading text-center">
								<h2>Introdueix les teves dades</h2>
							</div>
							<div class="form-block-image text-center">
								<img src="images/icons/login-icon.png" alt="Introdueix les teves dades">
							</div>
							<form id="login-form" action="" method="POST">
								<div class="form-message alert">Dades incorrectes. Revisa-ho</div>
								<label class="show-for-sr">Email</label>
								<input type="email" name="email" value="" placeholder="Email" required>
								<label class="show-for-sr">Clau d'accés</label>
								<input type="password" class="error" name="password" value="" placeholder="Clau d'accés" required>
								<button type="submit" class="button expanded">Accedir</button>
								<div class="grid-x">
									<div class="cell small-4 text-left">
										<input type="checkbox" id="remember-session" name="remember-session">
										<label for="remember-session">Recorda'm</label>
									</div>
									<div class="cell small-8 text-right">
										<a href="#" class="white-link"><strong>He oblidat les meves dades</strong> <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
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