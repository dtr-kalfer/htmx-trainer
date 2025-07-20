<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTMX-PHP Logic Trainer</title>
    <script src="https://unpkg.com/htmx.org"></script>
    <link rel="stylesheet" href="assets/style.css">
		
</head>
<body>
    <h1>🌊 HTMX + PHP Logic Trainer</h1>
    <p>Examples to explore HTMX features in action using PHP as backend.</p>
    <ul>
        <li><a href="examples/swap-oob.php">hx-swap-oob</a> — Out-of-band DOM update demo</li>
        <li><a href="examples/indicator.php">hx-indicator</a> — Show a loading indicator</li>
        <li><a href="examples/get-vs-post.php">GET vs POST</a> — Compare HTMX request methods</li>
        <li><a href="examples/fragment-load.php">Fragment Load</a> — Load partial content from server</li>
				<li><a href="examples/trigger-custom.php">hx-trigger (keyup)</a> — Auto-search while typing</li>
				<li><a href="examples/include-extra.php">hx-include</a> — Submit multiple fields</li>
				<li><a href="examples/confirm-action.php">hx-confirm</a> — Prompt before action</li>
				<li><a href="examples/polling.php">Polling</a> — Auto update every few seconds</li>
				<li><a href="examples/push-url.php">hx-push-url</a> — Dynamic URL updates</li>
				<li><a href="examples/swap-modes.php">hx-swap modes</a> — Visual DOM insertion styles</li>
				<li><a href="examples/afterswap.php">htmx:afterSwap</a> —  fires a little earlier vs. afterSettle, good for logic, not always ideal for visual transitions.</li>
				<li><a href="examples/aftersettle.php">htmx:afterSettle</a> — Add animation or logic after DOM update</li>
				<li><a href="examples/inline-edit.php">Inline editing (PATCH)</a></li>
				<li><a href="examples/tabs.php">Tabs via HTMX</a></li>
				<li><a href="examples/chained-select.php">Chained dropdowns</a></li>
				<li><a href="examples/pagination.php">Paginated fruits list</a> — Load 5 items at a time</li>
				<li><a href="examples/spinner-delay.php">Loading spinner (delayed)</a></li>
				<li><a href="examples/slideshow.php">HTMX Slideshow</a> — Load slides from folder for presentations</li>
    </ul>
		<small>(c)2025 Ferdinand Tumulak / MIT License</small>
</body>
</html>