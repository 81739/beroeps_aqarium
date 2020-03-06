<?php

require "config/constants.php";

?>
<?php

include "header.php";
?>


<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Winkelwagen Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product foto</b></div>
							<div class="col-md-2 col-xs-2"><b>Product naam</b></div>
							<div class="col-md-2 col-xs-2"><b>Stuks</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Prijs</b></div>
							<div class="col-md-2 col-xs-2"><b>Prijs in <?php echo CURRENCY; ?></b></div>
						</div>
						<div id="cart_checkout"></div>
						</div> 
					</div>
					
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>

<script>var CURRENCY = '<?php echo CURRENCY; ?>';</script>
</body>	
</html>
















		