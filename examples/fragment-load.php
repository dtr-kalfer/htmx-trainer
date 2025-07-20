<?php
if (isset($_GET['load'])) {
    echo "<div>📦 Fragment loaded at " . date('H:i:s') . "</div>";
    exit;
}

include_once("../shared/header.php");
?>

    <h2>🧩 Fragment Load Example</h2>

    <button hx-get="?load=1" hx-target="#frag" hx-swap="innerHTML">
        Load Fragment
    </button>

    <div id="frag" style="margin-top: 1rem;">
        No fragment loaded yet.
    </div>
</body>
</html>
