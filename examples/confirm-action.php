<?php
	if (isset($_GET['delete'])) {
			echo "<p>🗑️ Record deleted at " . date('H:i:s') . "</p>";
			exit;
	}
	include_once("../shared/header.php");
?>
	<h2>🛑 hx-confirm Example</h2>

	<button hx-get="?delete=1" 
					hx-confirm="Are you sure you want to delete?"
					hx-target="#result">
			Delete Item
	</button>

	<div id="result" style="margin-top: 1rem;">
			Nothing deleted yet.
	</div>
</body>
</html>
