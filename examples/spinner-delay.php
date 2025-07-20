<?php
if (isset($_GET['load'])) {
    sleep(2);
    echo "🌀 Data loaded after delay!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/htmx.org"></script>
</head>
<body>
    <h2>⏳ Loading Spinner Example</h2>

    <button hx-get="?load=1" hx-target="#result" hx-indicator="#spinner">
		<img id="spinner" class="htmx-indicator" src="../images/t_loading.webp" alt="loading" />
        Load Content
    </button>
    <div id="result"></div>
</body>
</html>
