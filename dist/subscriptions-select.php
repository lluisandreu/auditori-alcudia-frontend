<?php include "inc/head.inc"; ?>
<div class="page-subscription-select">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="subscription-select-tickets section-padding section-dark">
		<div class="subscription-select-heading heading-padding text-center">
			<h1 class="section-title"><span class="yellow-left-line"></span>Abonaments</h1>
		</div>
		<div class="text-center row-padding row">
			<div class="column text-center">
				<h3>Selecciona un abonament per començar el procés de compra</h3>
			</div>
		</div>
		<div class="section-subscriptions-available-block">
			<div class="items">
				<div class="item grid-container">
					<div class="grid-x grid-padding-x align-center">
						<div class="cell small-12 medium-6 text-center">
							<div class="wrapper">
								<h3>Donec rutrum congue leo eget malesuada</h3>
								<p>del 20 de maig de 2017 al 30 de juliol de 2017</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="subscription-select-events section-dark">
		<div class="subscription-select-events-block">
			<div class="events-grid row small-up-1 large-up-3">
				<div class="column item">
					<button class="button button-deselect button-primary"><i class="fa fa-times"></i></button>
					<div class="status-tab">
						<div class="featured-tab tab hide">Destacat</div>
						<div class="full-tab tab hide">Aforament complet</div>
					</div>
					<div class="teaser clearfix front" style="background-image: url('images/placeholder/featured_placeholder.jpg')">
						<div class="overlay"></div>
						<div class="teaser-heading relative grid-x grid-padding-x">
							<div class="cell">
								<h2>Curabitur aliquet quam id dui posuere blandit</h2>
							</div>
						</div>
						<div class="teaser-info relative grid-x grid-padding-x">
							<div class="teaser-date small-4 cell">
								<div class="teaser-date-day multiple"><small>Múltiples</small></div>
								<div class="teaser-date-day-month">Dates</div>
							</div>
							<div class="small-8 cell">
								<h4>Nom de la companyia</h4>
								<p><a href="#"><strong>Més informació +</strong></a></p>
								<a href="#" class="button button-primary">Selecciona</a>
							</div>
						</div>
						<a href="#" class="toggle-full hide-for-large"><i class="fa fa-chevron-down"></i></a>
					</div>
					<div class="full clearfix back">
						<div class="full-heading">
							<h2>Curabitur aliquet quam id dui posuere blandit</h2>
						</div>
						<div class="full-category field-category">
							<a href="#" class="gray-bold">Varis</a>
						</div>
						<div class="white-separator"></div>
						<div class="full-body">
							<p><span class="full-body-date"><strong>03/08.</strong></span>
							Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus...</p>
						</div>
						<div class="full-price">
							Preu: <strong>30€</strong>
						</div>
						<a href="#" class="button button-dark-bg expanded">Entrades</a>
					</div>
				</div>
				<div class="column tabbed event-full item">
					<button class="button button-deselect button-primary"><i class="fa fa-times"></i></button>
					<div class="status-tab">
						<div class="featured-tab tab hide">Destacat</div>
						<div class="full-tab tab">Aforament complet</div>
					</div>
					<div class="teaser clearfix front" style="background-image: url('images/placeholder/featured_placeholder.jpg')">
						<div class="overlay"></div>
						<div class="teaser-heading relative grid-x grid-padding-x">
							<div class="cell">
								<h2>Curabitur aliquet quam id dui posuere blandit</h2>
							</div>
						</div>
						<div class="teaser-info relative grid-x grid-padding-x">
							<div class="teaser-date small-4 cell">
								<div class="teaser-date-day">DIM</div>
								<div class="teaser-date-day-month">28 Jul</div>
							</div>
							<div class="small-8 cell">
								<h4>Nom de la companyia</h4>
							</div>
						</div>
						<a href="#" class="toggle-full hide-for-large"><i class="fa fa-chevron-down"></i></a>
					</div>
					<div class="full clearfix back">
						<div class="full-heading">
							<h2>Curabitur aliquet quam id dui posuere blandit</h2>
						</div>
						<div class="full-category field-category">
							<a href="#" class="gray-bold">Varis</a>
						</div>
						<div class="white-separator"></div>
						<div class="full-body">
							<p><span class="full-body-date"><strong>03/08.</strong></span>
							Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus...</p>
						</div>
						<div class="full-price">
							Preu: <strong>30€</strong>
						</div>
						<a href="#" class="button button-dark-bg expanded">Entrades</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="subscription-select-total section-dark">
		<div class="grid-container">
			<div class="text-center row-padding">
				<h2>Has seleccionat 2 espectacles</h2>
				<p>S'aplica 20€ per entrada</p>
				<hr>
				<h3><strong>Import total: 40€</strong></h3>
				<br>
				<a href="#" class="button button-primary">Confirmar selecció</a>
			</div>
		</div>
	</section>
	<section class="home-email-section section-padding section-primary">
		<div class="home-email-section-inner">
			<div class="home-email-block row align-middle align-center">
				<div class="home-email-block-content medium-6 large-4 columns">
					<form id="home-email-form" method="post" action="">
						<div class="input-group">
							<input type="email" class="input-group-field" placeholder="Correu electrònic" name="">
							<div class="input-group-button">
								<button type="submit" class="button"><i class="fa fa-chevron-right"></i></button>
							</div>
						</div>
						<p class="description">Vols rebre totes les novetats de l’Auditori d’Alcúdia?</p>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php include "inc/footer.inc"; ?>
</div>
<?php include "inc/bottom.inc"; ?>