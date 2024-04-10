<?php if($_GET['tagcampanha']){
		$utm_source = $_GET['utm_source'];
		$utm_medium = $_GET['utm_medium'];
		$utm_campaign = $_GET['utm_campaign'];
		?>
		<script type="text/javascript">
			alert(" Origem: <?php echo $utm_source; ?> \n Mídia: <?php echo $utm_medium; ?> \n Campanha:  <?php echo $utm_campaign; ?>")
		</script>

	<?php } ?>
