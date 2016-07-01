<?php
	foreach ($quotes as $quote) {
		// var_dump($quote);
?>
	<div class="quote col-sm-4">
		<p><?php echo $quote['quote'] ?></p>
	</div>
<?php
	}
?>