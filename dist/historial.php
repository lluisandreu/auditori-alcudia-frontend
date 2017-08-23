<?php include "inc/head.inc"; ?>
<div class="page-historial">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="historial-section-heading section-padding section-light-gray">
		<div class="text-center">
			<h1 class="section-title"><span class="yellow-left-line short"></span>El meu historial d'espectacles</h1>
		</div>
	</section>
	<section class="page-historial-filters filters-section">
		<div class="row show-for-small-only filter-row">
			<div class="column">
				<a href="#" class="filter-toggle" data-toggle="filters">Filtra per data o categoria <i class="fa fa-chevron-down"></i></a>
			</div>
			<div class="yellow-separator show-for-small-only"></div>
		</div>
		<div id="filters" data-toggler data-animate="fade-in fade-out">
			<div class="grid-container filter-row filters-section-calendar">
				<div class="grid-x">
					<div class="cell medium-8 small-12 text-left">
						<ul class="menu horizontal month-filter">
							<li class="filter-label full-small menu-text"><strong>Mes</strong></li>
							<li><a href="#">GEN</a></li>
							<li><a href="#">FEB</a></li>
							<li><a href="#">MAR</a></li>
							<li><a href="#" class="active">ABR</a></li>
							<li><a href="#">MAI</a></li>
							<li><a href="#">JUN</a></li>
							<li><a href="#">JUL</a></li>
							<li><a href="#">AGO</a></li>
							<li><a href="#">SEP</a></li>
							<li><a href="#">OCT</a></li>
							<li><a href="#">NOV</a></li>
							<li><a href="#">DES</a></li>
						</ul>
					</div>
					<div class="cell medium-auto small-8 medium-text-center">
						<ul class="menu year-filter">
							<li class="filter-label menu-text"><strong>Any</strong></li>
							<li><a href="#">2017</a></li>
							<li><a href="#">2018</a></li>
						</ul>
					</div>
					<div class="cell medium-2 small-4 medium-text-right">
						<ul class="menu date-reset align-right">
							<li class="filter-label no-arrow"><a href="#"><strong>Totes les dates</strong></a></li>
						</ul>
					</div>
					<div class="yellow-separator show-for-small-only"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="historial-section section-padding section-light-gray">
		<div class="historial-section inner">
			<div class="historial-section-block">
				<div class="hisorial-section-block-items items">
					<div class="item grid-container">
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
							<div class="item-tickets cell small-4 medium-3">
								<span class="item-cell-name">Compra de:</span>
								3 entrades
							</div>
							<div class="item-tariff cell small-4 medium-3">
								<span class="item-cell-name">Tarifa</span>
								General
							</div>
							<div class="item-price cell small-4 medium-3">
								<span class="item-cell-name">Preu</span>
								23,75€
							</div>
							<div class="item-download cell small-12 medium-3">
								<a href="#">Descarregar entrades</a>
							</div>
						</div>
					</div>
					<div class="item grid-container">
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
							<div class="item-tickets cell small-4 medium-3">
								<span class="item-cell-name">Compra de:</span>
								3 entrades
							</div>
							<div class="item-tariff cell small-4 medium-3">
								<span class="item-cell-name">Tarifa</span>
								General
							</div>
							<div class="item-price cell small-4 medium-3">
								<span class="item-cell-name">Preu</span>
								23,75€
							</div>
							<div class="item-download cell small-12 medium-3">
								<a href="#">Descarregar entrades</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center align-center row-padding">
					<div class="column">
						<a href="#" class="button button-dark-bg"><i class="fa fa-plus"></i></a>
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