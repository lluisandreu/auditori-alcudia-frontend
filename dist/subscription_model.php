
<?php include "inc/head.inc"; ?>
<div class="page-checkout-confirmation">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="modal-example">
			
	<div class="reveal custom-reveal dark-reveal" id="subscription-reveal" data-reveal>
		<div class="reveal-header primary-bg">
			<h3 class="text-center">Suscripció al newsletter</h3>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
			   <span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="reveal-body">
			<h3 class="text-center bold">T’has suscrit correctament al nostre newsletter. </h3>
			<h3 class="text-center bold">Moltes gràcies!</h3>
			<div class="expanded button-group">
			  <a class="button button-blue" data-close>Tancar</a>
			</div>
		</div>
	</div>

	</section>
	<?php include "inc/footer.inc"; ?>
</div>
<?php include "inc/bottom.inc"; ?>

<script>
	$(document).ready(function() {
		$('#subscription-reveal').foundation('open');
	});
</script>