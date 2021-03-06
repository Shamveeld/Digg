
</div><!-- #wrapper end -->		

<!-- JavaScripts
	============================================= -->
	<script src="<?= base_url();?>assets/js/jquery.js"></script>
	<script src="<?= base_url();?>assets/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?= base_url();?>assets/js/functions.js"></script>

	<script>
		var checkboxSame = $('#checkout-same-as-billing input[type=checkbox]');

		function sameAsBilling() {
			if( checkboxSame.is(':checked') ) {
				jQuery('.checkout-form-shipping').find(':input').prop('disabled', true);
			} else {
				jQuery('.checkout-form-shipping').find(':input').prop('disabled', false);
			}
		}

		jQuery(document).ready( function(){
			sameAsBilling();

			checkboxSame.on('change', function(){
				sameAsBilling();
			});

			jQuery('.checkout-form-billing').find(':input').on('change', function(){
				var billing		= $(this).attr('id'),
					billingVal	= $(this).val(),
					shipping	= billing.replace('billing', 'shipping'),
					shippingEl	= $('#' + shipping);

					if( shippingEl.length > 0 ) {
						shippingEl.val( billingVal );
					}
			});
		});
	</script>

</body>

</html>
