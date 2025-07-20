<?php
if (isset($_GET['search'])) {
    echo "<p>🔍 You searched: <strong>" . htmlspecialchars($_GET['search']) . "</strong></p>";
    exit;
}

include_once("../shared/header.php");
?>
	<h2>🎯 hx-trigger Example (on keyup)</h2>

	<input type="text" name="search" 
			placeholder="Type something..."
			hx-get="?search="
			hx-target="#result"
			hx-trigger="keyup changed delay:300ms"
			hx-include="[name='search']">

	<div id="result" style="margin-top: 1rem;">
			Start typing to trigger live update.
	</div>
</body>
</html>
