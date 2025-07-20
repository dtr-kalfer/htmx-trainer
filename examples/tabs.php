<?php
if (isset($_GET['tab'])) {
    echo "<div><h3>📄 You selected Tab " . htmlspecialchars($_GET['tab']) . "</h3><p>Some content here...</p></div>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/htmx.org"></script>
</head>
<body>
    <h2>🗂️ Tabs with HTMX</h2>

    <nav>
        <button hx-get="?tab=1" hx-target="#tab-content">Tab 1</button>
        <button hx-get="?tab=2" hx-target="#tab-content">Tab 2</button>
        <button hx-get="?tab=3" hx-target="#tab-content">Tab 3</button>
    </nav>

    <div id="tab-content" style="margin-top: 1rem;">
        Click a tab to load content.
    </div>
</body>
</html>
