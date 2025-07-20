<?php
	if (isset($_GET['page'])) {
			echo "<h3>📄 You're viewing Page " . htmlspecialchars($_GET['page']) . "</h3>";
			exit;
	}
	include_once("../shared/header.php");
?>
	<h2>🌐 hx-push-url Example</h2>

	<button hx-get="?page=1" hx-push-url="true" hx-target="#view">Page 1</button>
	<button hx-get="?page=2" hx-push-url="true" hx-target="#view">Page 2</button>

	<div id="view" style="margin-top: 1rem;">
			Choose a page to view content.
	</div>
</body>
</html>
