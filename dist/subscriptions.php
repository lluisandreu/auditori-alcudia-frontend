<?php include "inc/head.inc"; ?>
<div class="page-subscriptions">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="section-subscriptions-heading section-padding section-light-gray">
		<div class="text-center">
			<h1 class="section-title"><span class="yellow-left-line"></span>Abonament</h1>
		</div>
		<div class="text-center row-padding row column">
			<h3>Les sessions i les butaques s’han assignat aleatòriament. Pots canviar-ho si tens una altra preferència.</h3>
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
	<section class="section-subscriptions-tickets section-light-gray">
		<div class="cart-section-body">
			<div class="row text-right">
				<div class="column">
					<a href="#" class="blue-link">+ Afegir espectacle</a>
					<hr>
				</div>
			</div>
			<div class="subscriptions-tickets-block">
				<div class="tickets-list">
					<div class="cart-section-ticket item grid-container">
						<div class="item-remove-button">
							<a href="#">Eliminar <i class="fa fa-times"></i></a>
						</div>
						<div class="item-heading grid-x grid-padding-x">
							<div class="cell small-12 medium-6 text-left">
								<h3>Suspense maximus</h3>
							</div>
							<div class="item-metadata cell small-12 medium-6 text-left medium-text-right grid-x align-right">
								<ul class="menu horizontal">
									<li><i class="fa fa-long-arrow-right"></i> DIL <strong>01 MAR</strong></li>
									<li><i class="fa fa-clock-o"></i>&nbsp;<strong>18:00</strong>h</li>
									<li><i class="fa fa-map-marker"></i> Auditori d'Alcúdia</li>
								</ul>
							</div>
						</div>
						<div class="item-information grid-x grid-padding-x">
							<div class="item-section cell small-6 medium-3">
								<span class="item-cell-name">Secció</span>
								PLATEA 3 - PLTA. CENTRO
							</div>
							<div class="item-file cell small-3 medium-auto">
								<span class="item-cell-name">Fila</span>
								JJ
							</div>
							<div class="item-number cell small-3 medium-auto">
								<span class="item-cell-name">N°</span>
								15
							</div>
							<div class="item-tariff cell small-6 medium-3">
								<span class="item-cell-name">Tarifa</span>
								Abonament
							</div>
							<div class="item-price cell small-6 medium-3">
								<span class="item-cell-name">Preu</span>
								23,75€
							</div>
						</div>
						<div class="item-footer grid-x grid-padding-x">
							<div class="small-6 medium-9 cell">
								<a href="#" class="blue-link">Veure mapa <i class="fa fa-chevron-right"></i></a>
							</div>
							<div class="small-6 medium-3 cell no-padding">
								<button class="button button-blue expanded" data-open="item-seat-map-KEY">Canvi de sessió i/o butaca</button>
							</div>
						</div>
						<div class="item-seat-map reveal large reveal-dark" id="item-seat-map-KEY" data-reveal>
							<button class="close-button" data-close aria-label="Tanca" type="button">
						    	<span aria-hidden="true">&times;</span>
						  	</button>
						  	<div class="subscription-item-reveal-block">
						  		<div class="item-heading text-center">
						  			<h2>Event title here</h2>
						  		</div>
						  		<div class="item-body grid-x">
						  			<div class="small-12 large-3 cell sessions-column">
						  				<h3>Sessions disponibles</h3>
						  				<div class="item-sessions-list">
						  					<div class="item grid-x session-full">
						  						<div class="cell small-6 session-date"><i class="fa fa-long-arrow-right"></i> DIL <strong>01 MAR</strong></div>
						  						<div class="cell small-6 session-time"><i class="fa fa-clock-o"></i>&nbsp;<strong>18:00</strong>h</div>
						  						<div class="cell small-12 session-status text-center">
						  							Aforament complet
						  						</div>
						  					</div>
						  					<div class="item grid-x">
						  						<div class="cell small-6 session-date"><i class="fa fa-long-arrow-right"></i> DIL <strong>01 MAR</strong></div>
						  						<div class="cell small-6 session-time"><i class="fa fa-clock-o"></i>&nbsp;<strong>18:00</strong>h</div>
						  						<div class="cell small-12 session-status text-center">
						  							Aforament complet
						  						</div>
						  					</div>
						  				</div>
						  				<a href="#" class="button button-blue expanded">Confirmar canvi</a>
						  			</div>
						  			<div class="small-12 large-9 cell">
						  				<h3>Selecciona butaca</h3>
						  				<?php include "inc/seat-map-block.inc"; ?>
						  			</div>
						  		</div>
						  	</div>
						</div>
					</div>
				</div>
				<div class="grid-container text-center row-padding">
					<h3 class="bold">Has seleccionat <span>2</span> espectacles</h3>
					<p>S'aplica 20€ per entrada</p>
				</div>
				<div class="grid-container cart-total row-padding">
					<div class="grid-x grid-padding-x large-right">
						<div class="cell small-12"><hr></div>
						<div class="cell small-12 large-10 text-center large-text-right">
							<div class="total">
								<h2 class="no-margin">Total: <strong><span>75,50</span>€</strong></h2>
							</div>
							<div><small>Imposts inclosos</small></div>
						</div>
						<div class="cell small-12 large-2 text-center large-right">
							<a href="#" class="button button-primary small-expanded">Confirmar compra</a>
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