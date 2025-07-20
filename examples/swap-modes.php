<?php
	if (isset($_GET['mode'])) {
			echo "<p>🎯 Swapped using mode: <strong>" . htmlspecialchars($_GET['mode']) . "</strong></p>";
			exit;
	}
	include_once("../shared/header.php");
?>
	<h2>🔀 hx-swap Modes</h2>

	<div id="target" style="border:1px solid #ccc; padding:1rem; margin:1rem 0;">
			<p>🔘 Target Block</p>
	</div>
	<button hx-get="?mode=innerHTML" hx-target="#target" hx-swap="innerHTML">innerHTML</button>
	<button hx-get="?mode=beforebegin" hx-target="#target" hx-swap="beforebegin">beforebegin</button>
	<button hx-get="?mode=afterbegin" hx-target="#target" hx-swap="afterbegin">afterbegin</button>
	<button hx-get="?mode=beforeend" hx-target="#target" hx-swap="beforeend">beforeend</button>
	<button hx-get="?mode=afterend" hx-target="#target" hx-swap="afterend">afterend</button>
	<button hx-get="?mode=replace" hx-target="#target" hx-swap="outerHTML">outerHTML</button>
</body>
</html>
