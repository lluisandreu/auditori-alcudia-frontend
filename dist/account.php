<?php include "inc/head.inc"; ?>
<div class="page-my-account">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="my-account-form section-padding section-light-gray">
		<div class="my-account-form-heading heading-padding text-center">
			<h1 class="section-title"><span class="yellow-left-line"></span>El meu compte</h1>
		</div>
		<div class="my-account-form-body">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="cell small-12 large-10">
						<div class="my-account-form-block">
							<form id="my-account-form" action="" method="POST">
								<div class="form-message success row column">Les dades han estat guardades correctament</div>
								<div class="row">
									<div class="column small-12 medium-4">
										<label class="show-for-sr">Nom</label>
										<input type="text" name="name" value="" placeholder="Nom" required>
									</div>
									<div class="column small-12 medium-4">
										<label class="show-for-sr">Email</label>
										<input type="email" name="email" value="" placeholder="Email" required>
									</div>
									<div class="column small-12 medium-4">
										<label class="show-for-sr">Telèfon</label>
										<input type="text" name="email" value="" placeholder="Telèfon">
									</div>
								</div>
								<div class="row">
									<div class="column small-12 medium-8">
										<label class="show-for-sr">Nom</label>
										<input type="text" name="address" value="" placeholder="Direcció postal">
									</div>
									<div class="column small-12 medium-4">
										<label class="show-for-sr">Codi postal</label>
										<input type="text" name="postalcode" value="" placeholder="Codi postal">
									</div>
								</div>
								<div class="row">
									<div class="column small-12 medium-4">
										<label class="show-for-sr">Població</label>
										<input type="text" name="town" value="" placeholder="Població">
									</div>
									<div class="column small-12 medium-4">
										<label class="show-for-sr">País</label>
										<select name="country">
											<option value="">País</option>
											<option>Espanya</option>
										</select>
									</div>
									<div class="column small-12 medium-4">
										<label class="show-for-sr">Provincia</label>
										<select name="country">
											<option value="">Provincia</option>
											<option>Illes Balears</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="column small-12 medium-6">
										<label class="show-for-sr">Clau d'accés</label>
										<input type="password" name="password" value="" placeholder="Clau d'accés">
									</div>
									<div class="column small-12 medium-6">
										<label class="show-for-sr">Clau d'accés</label>
										<input type="password" name="validate-password" value="" placeholder="Confirma la clau d'accés">
									</div>
								</div>
								<div class="row">
									<div class="column">
										<input type="checkbox" name="newsletter" id="newsletter"> 
										<label for="newsletter">Vull rebre per correu electrònic les notícies i la programació relativa a l’Auditori d’Alcúdia</label>
									</div>
								</div>
								<br>
								<div class="row align-center">
									<button type="submit" class="button">Actualitzar dades</button>
								</div>
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