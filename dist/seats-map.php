<?php include "inc/head.inc"; ?>
<div class="page-seats-map">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="seats-teaser section-padding section-dark">
		<div class="row seats-teaser-inner">
			<div class="column small-7 large-2 medium-4 seats-teaser-image">
				<img src="http://via.placeholder.com/350x350" alt="">
			</div>
			<div class="column small-12 large-4 medium-8 seats-teaser-info">
				<div class="seats-teaser-heading">
					<h2>Praesent sapien massa, convallis a pellentesque nec.</h2>
				</div>
				<div class="grid-x grid-x-padding seats-teaser-metadata">
					<div class="cell small-6 seats-teaser-date">
						<i class="fa fa-long-arrow-right"></i>&nbsp;DIL <strong>01 MAR</strong>
					</div>
					<div class="cell small-6 seats-teaser-time">
						<i class="fa fa-clock-o"></i>&nbsp; <strong>18:00</strong>h
					</div>
					<div class="cell small-6 seats-teaser-location">
						<i class="fa fa-map-marker"></i>&nbsp;Auditori d'Alúdia
					</div>
					<div class="cell small-6 show-for-small-only">
						<a href="#" class="seats-teaser-more-link">Modificar <i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
				<a href="#" class="hide-for-small-only seats-teaser-more-link">Modificar <i class="fa fa-chevron-right"></i></a>
			</div>
		</div>
	</section>
	<section class="seats-filter section-dark">
		<div class="seats-filter-inner grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell show-for-small-only">
					<a class="button button-white small-expanded show-for-small-only" data-toggle="filter-toggler">Referències <i class="fa fa-chevron-down show-for-small-only"></i></a>
				</div>
				<div class="cell small-12 medium-3 large-3 column text-center medium-text-left hide-for-small-only">
					<p class="primary-color no-margin"><strong>Selecciona una o vàries butaques</strong></p>
				</div>
				<div id="filter-toggler" data-toggler=".expanded" class="small-12 medium-9 large-8 large-offset-1 column text-center medium-text-right">
					<ul class="menu vertical medium-horizontal medium-align-right">
						<li class="hide-for-small-only"><strong><span class="primary-color">Referències:</span></strong></li>
						<li>
							<i class="seat-icon"></i>&nbsp;<span>Lliure</span>
						</li>
						<li>
							<i class="seat-icon-full"></i>&nbsp;<span>Ocupada</span>
						</li>
						<li>
							<i class="seat-icon-selected"></i>&nbsp;<span>Seleccionada</span>
						</li>
						<li>
							<i class="fa fa-wheelchair"></i> Butaques mobilitat reduïda
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="seats-map section-padding section-dark">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="seats-map-seats small-12 large-9 cell">
					<div class="show-for-small-only">
						<a class="button small-expanded">1 Selecciona una o varies butaques del mapa</a>
					</div>
					<?php include "inc/seat-map-block.inc"; ?>
				</div>
				<div class="seats-map-tickets small-12 large-3 cell">
					<div class="seats-map-tickets-toggle show-for-small-only">
						<a data-toggle="seat-map-tickets-block" class="button button-light-gray small-expanded">2 Confirma les teves entrades</a>
					</div>
					<div class="seat-map-tickets-block" data-toggler=".expanded" id="seat-map-tickets-block">
						<div class="seat-map-tickets-inner">
							<div class="seat-map-tickets-heading text-center medium-text-left">
								<h3>Entrades</h3>
							</div>
							<div class="seat-map-tickets">
								<div class="seat-map-ticket item">
									<div class="grid-x values">
										<div class="cell small-4 seat-map-ticket-area">PLA</div>
										<div class="cell small-4 seat-map-ticket-file">AA</div>
										<div class="cell small-4 seat-map-ticket-num">04</div>
									</div>
									<div class="grid-x labels">
										<div class="cell small-4 seat-map-ticket-area-label">Selecció</div>
										<div class="cell small-4 seat-map-ticket-file-label">Fila</div>
										<div class="cell small-4 seat-map-ticket-num-label">N°</div>
									</div>
									<hr>
									<div class="seat-map-ticket-price"><span>30</span>€</div>
									<button class="button small seat-map-ticket-remove"><i class="fa fa-times"></i></button>
								</div>
								<div class="seat-map-ticket item">
									<div class="grid-x values">
										<div class="cell small-4 seat-map-ticket-area">PLA</div>
										<div class="cell small-4 seat-map-ticket-file">AA</div>
										<div class="cell small-4 seat-map-ticket-num">04</div>
									</div>
									<div class="grid-x labels">
										<div class="cell small-4 seat-map-ticket-area-label">Selecció</div>
										<div class="cell small-4 seat-map-ticket-file-label">Fila</div>
										<div class="cell small-4 seat-map-ticket-num-label">N°</div>
									</div>
									<hr>
									<div class="seat-map-ticket-price"><span>30</span>€</div>
									<button class="button small seat-map-ticket-remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="seat-map-ticket-total">
								<hr>
								<div class="text-center seat-map-ticket-total">Total: <strong><span>30</span>€</strong></div>
								<br>
								<div class="text-center">
									<a href="#" class="button button-dark">Comprar</a>
								</div>
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