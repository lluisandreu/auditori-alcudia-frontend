
<?php include "inc/head.inc"; ?>
<div class="page-checkout-confirmation">
	<div class="nav-bar dark">
		<?php include "inc/nav.inc"; ?>
	</div>
	<section class="modal-example">
			
	<div class="reveal custom-reveal dark-reveal" id="confirmation-reveal" data-reveal>
		<div class="reveal-header primary-bg">
			<h3 class="text-center">Confirma l'operació</h3>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
			   <span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="reveal-body">
			<h3 class="text-center bold">Segur que vols deseleccionar aquesta butaca?</h3>
			<div class="expanded button-group">
			  <a class="button button-white" data-close>Cancelar</a>
			  <a class="button button-blue">Continuar</a>
			</div>
		</div>
	</div>

	</section>
	<?php include "inc/footer.inc"; ?>
</div>
<?php include "inc/bottom.inc"; ?>

<script>
	$(document).ready(function() {
		$('#confirmation-reveal').foundation('open');
	});
</script>