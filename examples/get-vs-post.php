<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<div>📤 POST received at " . date('H:i:s') . "</div>";
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['ping'])) {
    echo "<div>📥 GET ping received at " . date('H:i:s') . "</div>";
    exit;
}

include_once("../shared/header.php");
?>
    <h2>🔁 GET vs POST in HTMX</h2>

    <button hx-get="?ping=1" hx-target="#result">
        Send GET
    </button>

    <button hx-post="get-vs-post.php" hx-target="#result">
        Send POST
    </button>

    <div id="result" style="margin-top: 1rem;">
        Waiting for interaction...
    </div>
</body>
</html>
