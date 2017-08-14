<?php include "inc/head.inc"; ?>
<div class="page-blog">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<header class="blog-header">
		<div class="blog-header-inner" style="background-image: url('images/placeholder/blog_placeholder.jpg');">
			<div class="blog-header-heading text-center">
				<h1>Lorem ipsum dolor sit amet</h1>
				<div class="blog-header-date">30/05/2017</div>
			</div>
		</div>
	</header>
	<section class="blog-content-section section-padding section-light-gray">
		<div class="row">
			<div class="column">
				<div class="field-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Proin eget tortor </a>risus. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. </p>
					<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit <strong>amet aliquam vel</strong>, ullamcorper sit amet ligula. Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="share-section section-padding section-light-gray">
		<div class="share-section-heading text-center">
			<h2 class="relative"><span class="yellow-left-line"></span>Comparteix</h2>
		</div>
		<div class="share-section-content row">
			<div class="column">
				<ul class="menu horizontal align-center">
					<li><a href="#"><i class="fa fa-envelope"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
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