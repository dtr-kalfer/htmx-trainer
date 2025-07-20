<?php if (isset($_GET['trigger'])): ?>
	<!-- Out-of-band response only -->
	<div id="oob-result" hx-swap-oob="true">
			<p>✅ OOB content replaced at <?= date('H:i:s') ?></p>
	</div>
<?php else: ?>
	<?php include_once("../shared/header.php"); 
	
	?>
	<h2>🔄 hx-swap-oob Example</h2>
	<button hx-get="?trigger=1" hx-target="this" hx-swap="none">
			Trigger Out-of-Band Swap
	</button>
	<div id="oob-result">
			<p>⏳ Waiting for OOB update...</p>
	</div>
	</body>
	</html>
<?php endif; ?>
