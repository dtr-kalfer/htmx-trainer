<?php
	if (isset($_GET['time'])) {
			echo "🕒 Current time: " . date('H:i:s');
			exit;
	}
	include_once("../shared/header.php");
?>
	<h2>⏱️ Polling with hx-trigger</h2>

	<div 
			hx-get="?time=1"
			hx-trigger="every 2s"
			hx-swap="innerHTML">
			Waiting for time...
	</div>
</body>
</html>
