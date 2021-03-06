<?php include "inc/head.inc"; ?>
<div class="page-event">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<header class="event-header">
		<div class="event-header-teaser" style="background-image: url('images/placeholder/event_placeholder.jpg'); ">
			<div class="event-header-row grid-x grid-padding-x align-center-middle">
				<div class="cell large-6">
					<h1>Praesent sapien massa, convallis a pellentesque nec</h1>
					<div class="event-header-content">
						<button class="button button-date"><i class="fa fa-long-arrow-right"></i>DIL <strong>01 MAR</strong> - DIM <strong>02 MAR</strong></button>
						<a class="button button-primary" href="#entrades" data-smooth-scroll>Entrades</a>
					</div>
					<a href="#informacio" class="button button-white" data-smooth-scroll>Més Informació</a>
				</div>
			</div>
		</div>
	</header>
	<section class="event-tickets section-padding overflow-x-hidden">
		<div class="event-tickets-content row expanded collapse">
			<div class="column text-center">
				<h2 id="entrades" class="relative">Selecciona una data <span class="yellow-right-line"></span></h2>
			</div>
		</div>
		<div class="event-tickets-block grid-container">
			<div class="event-tickets-item callout grid-x grid-padding-x align-middle">
				<div class="cell small-12 medium-3 event-status text-right">Entrades disponibles</div>
				<div class="cell small-4 medium-2 event-date"><i class="fa fa-long-arrow-right"></i> DIL <strong>01 MAR</strong></div>
				<div class="cell small-4 medium-2 event-time"><i class="fa fa-clock-o"></i>&nbsp;<strong>18:00</strong>h</div>
				<div class="cell small-4 medium-2 event-location"><i class="fa fa-map-marker"></i> Auditori d'Alcúdia</div>
				<div class="cell small-12 medium-3 event-actions">
					<a href="#" class="button small-expanded">Comprar Entrades</a>
				</div>
			</div>
			<div class="event-tickets-item callout grid-x grid-padding-x align-middle">
				<div class="cell small-12 medium-3 event-status text-right">Entrades disponibles</div>
				<div class="cell small-4 medium-2 event-date"><i class="fa fa-long-arrow-right"></i> DIM <strong>04 MAR</strong></div>
				<div class="cell small-4 medium-2 event-time"><i class="fa fa-clock-o"></i>&nbsp;<strong>19:00</strong>h</div>
				<div class="cell small-4 medium-2 event-location"><i class="fa fa-map-marker"></i> Annex A</div>
				<div class="cell small-12 medium-3 event-actions">
					<a href="#" data-open="tickets-offline" class="button small-expanded">Comprar Entrades</a>
				</div>
			</div>
			<div class="event-tickets-item callout event-full grid-x grid-padding-x align-middle">
				<div class="cell small-12 medium-3 event-status text-right">
					<i class="fa fa-exclamation-triangle show-for-small-only"></i> Aforament complet
				</div>
				<div class="cell small-4 medium-2 event-date"><i class="fa fa-long-arrow-right"></i> DIL <strong>01 MAR</strong></div>
				<div class="cell small-4 medium-2 event-time"><i class="fa fa-clock-o"></i>&nbsp;<strong>18:00</strong>h</div>
				<div class="cell small-4 medium-2 event-location"><i class="fa fa-map-marker"></i> Auditori d'Alcúdia</div>
				<div class="cell small-12 medium-3 event-actions">
					<a href="#" class="button small-expanded disabled" disabled>Aforament complet</a>
				</div>
			</div>
			<div class="event-tickets-item callout event-cancelled grid-x grid-padding-x align-middle">
				<div class="cell small-12 medium-3 event-status text-right">
					<i class="fa fa-exclamation-triangle show-for-small-only"></i> Cancel·lat
				</div>
				<div class="cell small-4 medium-2 event-date"><i class="fa fa-long-arrow-right"></i> DIL <strong>01 MAR</strong></div>
				<div class="cell small-4 medium-2 event-time"><i class="fa fa-clock-o"></i>&nbsp;<strong>18:00</strong>h</div>
				<div class="cell small-4 medium-2 event-location"><i class="fa fa-map-marker"></i> Auditori d'Alcúdia</div>
				<div class="cell small-12 medium-3 event-actions">
					<a href="#" data-open="tickets-cancelled" class="button small-expanded">Més informació</a>
				</div>
			</div>
		</div>
		<div class="reveal large reveal-dark event-tickets-offline" id="tickets-offline" data-reveal>
			<div class="text-center">
				<h2>Per aquest espectacle la venda online no està activada.</h2>
				<p>Venda exclusiva a les taquilles de l'Auditori d'Alcúdia.</p>
				<p><strong>Direcció:</strong>
				<address>Plaça de la Porta de Mallorca, 3<br>
				07400 Alcúdia (Illes Balears)</address></p>
				<p><strong>Telèfon:</strong></p>
				<p>971 89 71 85</p>
			</div>
			<button class="close-button" data-close aria-label="Tanca" type="button">
			  <span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="reveal large reveal-dark event-tickets-cancelled" id="tickets-cancelled" data-reveal>
			<div class="text-center">
				<h2>L'espectacle s'ha cancel·lat per motius personals d'un dels intèrprets. </h2>
				<p>Si ha havieu comprat les entrades podeu venir a les taquilles de l'Auditori d'Alcúdia i us canviarem l'entrada per un altre espectacle o bé us retornarem els doblers.</p>
				<p>Disculpeu les molèsties.</p>
			</div>
			<button class="close-button" data-close aria-label="Tanca" type="button">
			  <span aria-hidden="true">&times;</span>
			</button>
		</div>
	</section>
	<section class="event-content section-padding">
		<div class="event-content-heading row expanded collapse">
			<div class="column text-center">
				<h2 id="informacio" class="relative"><span class="yellow-left-line"></span> Informació</h2>
			</div>
		</div>
		<div class="event-content-main grid-container">
			<div class="grid-x grid-padding-x align-stretch">
				<div class="cell small-12 medium-6 event-info">
					<h2>Praesent sapien massa, convallis a pellentesque nec</h2>
					<div class="field-company-name field">
						Nom de la companyia
					</div>
					<div class="field-abstract field">
						<p><strong>Argument</strong></p>
						<hr>
						<p>Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
						 <p>Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
						<hr>
					</div>
					<div class="field-sponsors field">
						<p><strong>Col·laboren</strong></p>
						<img src="http://via.placeholder.com/80x50" alt="">
						<img src="http://via.placeholder.com/80x50" alt="">
					</div>
					<div class="field-tech-details callout field">
						<div class="grid-x">
							<div class="field-price small-5 cell">Preu venta anticipada: <strong>30€</strong></div>
							<div class="field-price small-7 cell">Preu venta a taquilla: <strong>40€</strong></div>
						</div>
						<hr>
						<div class="grid-x">
							<div class="field-duration small-5 cell">Durada: <strong>1.35h</strong></div>
							<div class="field-location small-7 cell"><i class="fa fa-map-marker"></i> Auditori d'Alcúdia</div>
						</div>
					</div>
					<div class="field-more-link field">
						<a href="#">Més informació <i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
				<div class="cell small-12 medium-6 event-extra">
					<div class="event-extra-inner">
						<div class="grid-x grid-padding-x align-stretch">
							<div class="small-12 cell event-extra-first-column">
								<div class="heading">
									<h4 class="underline-primary"><strong>Repartiment</strong></h4>
								</div>
								<h4>Director</h4>
								<p>Praesent sapien massa. <a href="">testing link</a></p>
								<h4>Actors</h4>
								<p>Praesent sapien massa.</p>
								<h4>Tenors</h4>
								<p>Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
								<h4>Música</h4>
								<p>Praesent sapien massa.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="event-trailer section-padding">
		<div class="event-trailer-block grid-container">
			<div class="grid-x align-center">
				<div class="event-trailer-carousel cell medium-8 owl-carousel owl-theme">
					<div class="item">
						<img src="images/placeholder/carousel_placeholder.jpg" alt="">
					</div>
					<div class="item">
						<img src="images/placeholder/carousel_placeholder.jpg" alt="">
					</div>
					<div class="item">
						<img src="images/placeholder/carousel_placeholder_vertical.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="relative text-center event-trailer-link">
				<a data-open="trailer-1"><i class="fa fa-play-circle-o"></i> Veure el trailer</a>
				<div class="reveal trailer-reveal" id="trailer-1" data-reveal>
					<div class="responsive-embed widescreen">
						<iframe width="560" height="315" src="//www.youtube.com/embed/f2O6mQkFiiw" frameborder="0" allowfullscreen allowscriptaccess="always"></iframe>
					</div>
					<button class="close-button" data-close aria-label="Tanca" type="button">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	</section>
	<section class="event-recommended section-padding relative">
		<div class="primary-triangle-background-bottom"></div>
		<div class="event-recommended-heading">
			<div class="column text-center">
				<h2>També et pot interessar</h2>
			</div>
		</div>
		<div class="event-recommended-block grid-container">
			<div class="grid-x grid-padding-x grid-margin-y">
				<div class="cell small-12 medium-6">
					<div class="event-recommended-item" style="background-image: url('images/placeholder/event_placeholder.jpg');">
						<a href="#"><div class="overlay"></div></a>
						<div class="item-heading">
							<a href="#"><h2>Vida i miracles de n'Aineta dels matalassos</h2></a>
							<a href="#"><div class="field-category">Música ></div></a>
						</div>
					</div>
				</div>
				<div class="cell small-12 medium-6">
					<div class="event-recommended-item" style="background-image: url('images/placeholder/event_placeholder.jpg');">
						<a href="#"><div class="overlay"></div></a>
						<div class="item-heading">
							<a href="#"><h2>Vida i miracles de n'Aineta dels matalassos</h2></a>
							<a href="#"><div class="field-category">Música ></div></a>
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