<?php include "inc/head.inc"; ?>
<div class="page-events-historic">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="page-programacio-filters filters-section">
		<div class="row show-for-small-only filter-row">
			<div class="column">
				<a href="#" class="filter-toggle" data-toggle="filters">Filtra per data o categoria <i class="fa fa-chevron-down"></i></a>
			</div>
			<div class="yellow-separator"></div>
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
					<div class="yellow-separator"></div>
				</div>
			</div>
			<div class="grid-container filter-row filters-section-categories">
				<div class="grid-x">
					<div class="cell small-12 medium-auto">
						<ul class="menu horizontal categories-filter">
							<li class="filter-label full-small menu-text"><strong>Categories i temporades</strong></li>
							<li><a href="#">Dança</a></li>
							<li><a href="#">Teatre</a></li>
							<li><a href="#">Música</a></li>
							<li><a href="#">Concerts</a></li>
							<li><a href="#" class="active">Festivals</a></li>
							<li><a href="#">Òpera</a></li>
							<li><a href="#">Especials</a></li>
							<li><a href="#">Cant</a></li>
							<li><a href="#">Obres</a></li>
							<li><a href="#">Musicals</a></li>
							<li><a href="#">Mostra d'art contemporani</a></li>
							<li><a href="#">Interpretacions</a></li>
							<li><a href="#">Concursos</a></li>
							<li><a href="#">Cicles de cine</a></li>
							<li><a href="#">XXX Mostra de Teatre Escolar</a></li>
							<li><a href="#">Edició especial</a></li>
							<li><a href="#">Vocals</a></li>
						</ul>
					</div>
					<div class="cell medium-2 medium-text-right">
						<a href="#" class="button button-primary small small-expanded all-categories-button">Totes les categories</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="page-programacio-events section-padding section-dark">
		<div class="programacio-events-block">
			<div class="events-grid row small-up-1 large-up-3">
				<div class="column item flip-container">
					<div class="flipper">
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
								<div class="teaser-date small-5 column">
									<div class="teaser-date-day multiple">Múltiples</div>
									<div class="teaser-date-day-month">Dates</div>
								</div>
								<div class="small-7 column">
									<p>Nom de la companyia</p>
									<div class="teaser-price">30€</div>
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
							<a href="#" class="button button-dark-bg expanded">Més informació</a>
						</div>
					</div>
				</div>
				<div class="column item tabbed event-featured flip-container">
					<div class="flipper">
						<div class="status-tab">
							<div class="featured-tab tab">Destacat</div>
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
								<div class="teaser-date small-5 column">
									<div class="teaser-date-day">OCT</div>
									<div class="teaser-date-day-month">2017</div>
								</div>
								<div class="small-7 column">
									<p>Nom de la companyia</p>
									<div class="teaser-price">30€</div>
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
							<a href="#" class="button button-dark-bg expanded">Més informació</a>
						</div>
					</div>
				</div>
			</div>
			<div class="events-paging load-more-pager">
				<div class="text-center">
					<a href="#" class="button button-white"><i class="fa fa-plus"></i></a>
				</div>
			</div>
		</div>
	</section>
	<?php include "inc/footer.inc"; ?>
</div>
<?php include "inc/bottom.inc"; ?>