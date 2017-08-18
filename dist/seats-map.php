<?php include "inc/head.inc"; ?>
<div class="page-seats-map">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="seats-teaser section-padding section-dark">
		<div class="row seats-teaser-inner">
			<div class="column small-12 large-2 medium-4 seats-teaser-image">
				<img src="http://via.placeholder.com/350x350" alt="">
			</div>
			<div class="column small-12 large-4 medium-8 seats-teaser-info">
				<div class="seats-teaser-heading">
					<h2>Praesent sapien massa, convallis a pellentesque nec.</h2>
				</div>
				<div class="grid-x grid-x-padding">
					<div class="cell small-4 seats-teaser-date">
						<i class="fa fa-long-arrow-right"></i>&nbsp;DIL <strong>01 MAR</strong>
					</div>
					<div class="cell small-4 seats-teaser-time">
						<i class="fa fa-clock-o"></i>&nbsp; <strong>18:00</strong>h
					</div>
					<div class="cell small-4 seats-teaser-location">
						<i class="fa fa-map-marker"></i>&nbsp;Auditori d'Alúdia
					</div>
				</div>
				<a href="#" class="seats-teaser-more-link">Modificar <i class="fa fa-chevron-right"></i></a>
			</div>
		</div>
	</section>
	<section class="seats-filter section-dark">
		<div class="seats-filter-inner row">
			<a class="button small-expanded show-for-small-only" data-toggle="filter-toggler">Referències <i class="fa fa-chevron-down show-for-small-only"></i></a>
			<div class="small-12 medium-3 large-3 column text-center medium-text-left hide-for-small-only">
				<p class="primary-color no-margin"><strong>Selecciona una o vàries butaques</strong></p>
			</div>
			<div id="filter-toggler" data-toggler=".expanded" class="small-12 medium-9 large-8 large-offset-1 column text-center medium-text-right">
				<div class="grid-x grid-padding-x align-right">
					<div class="cell medium-2 hide-for-small-only"><strong><span class="primary-color">Referències:</span></strong></div>
					<div class="cell medium-2">
						<i class="seat-icon"></i>&nbsp;<span>Lliure</span>
					</div>
					<div class="cell medium-2">
						<i class="seat-icon-full"></i>&nbsp;<span>Ocupada</span>
					</div>
					<div class="cell medium-2">
						<i class="seat-icon-selected"></i>&nbsp;<span>Seleccionada</span>
					</div>
					<div class="cell medium-4">
						<i class="fa fa-wheelchair"></i> Butaques amb mobilitat reduïda
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="seats-map section-padding section-dark">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="seats-map-seats small-12 large-9 cell">
					<div class="seats-map-seats-block">
						<div class="seats-block-fullarea">
							<div class="seats-block-amphitheater seats-block-area">
								<div class="area-name">Anfiteatre</div>
								<div class="seats-row" data-seat-row data-row-wheelchair="true" data-file="1">
									<div class="seats">
										<a href="#" class="seat" data-seat data-num="1" data-wheelchair="true"><i class="seat-icon"></i></a>
										<a href="#" class="seat" data-seat data-num="2"  data-wheelchair="true" data-full="true"><i class="seat-icon"></i></a>
										<a href="#" class="seat" data-seat data-num="3" data-wheelchair="true" data-full="true"><i class="seat-icon"></i></a>
										<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
										<a href="#" class="seat" data-seat data-num="5"><i class="seat-icon"></i></a>
										<a href="#" class="seat" data-seat data-num="6"><i class="seat-icon"></i></a>
									</div>
								</div>
								<div class="seats-row two-columns"  data-seat-row data-file="2">
									<div class="seats">
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="1"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="2" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="3" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
										</div>
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="5"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="6"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="7"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="7"><i class="seat-icon"></i></a>
										</div>
									</div>
								</div>
								<div class="seats-row two-columns" data-seat-row data-row-wheelchair="true" data-seat-row data-file="3">
									<div class="seats">
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="1"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="2" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="3" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
										</div>
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="5"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="6"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="7"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="7"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
										</div>
									</div>
								</div>
								<div class="seats-row three-columns" data-seat-row data-file="3">
									<div class="seats">
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="1"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="2" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="3" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
										</div>
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="5"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="6"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="7"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="7"><i class="seat-icon"></i></a>
										</div>
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="1"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="2" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="3" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="seats-block-platea seats-block-area">
								<div class="area-name">Platea</div>
								<div class="seats-row three-columns" data-seat-row data-file="4">
									<div class="seats">
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="1"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="2" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="3" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
										</div>
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="5"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="6"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="7"><i class="seat-icon"></i></a>
										</div>
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="8"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="9"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="10"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="11"><i class="seat-icon"></i></a>
										</div>
									</div>
								</div>
								<div class="seats-row three-columns" data-seat-row data-file="5">
									<div class="seats">
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="1"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="2" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="3" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
										</div>
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="5"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="6"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="7"><i class="seat-icon"></i></a>
										</div>
										<div class="seat-column">
											<a href="#" class="seat" data-seat data-num="8"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="9"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="10"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="11"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
											<a href="#" class="seat" data-seat data-num="4" data-full="true"><i class="seat-icon"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="seats-block-stage text-center">
								<div class="stage-box">Escenari</div>
							</div>
						</div>
					</div>
				</div>
				<div class="seats-map-tickets small-12 large-3 cell">
					<div class="seat-map-tickets-block">
						<div class="seat-map-tickets-inner">
							<div class="seat-map-tickets-heading">
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
									<a href="#" class="button button-dark-bg">Comprar</a>
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