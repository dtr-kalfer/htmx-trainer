<?php
if (isset($_GET['getMsg'])) {
    echo "<div class='message'>This message was loaded via HTMX 📨</div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/htmx.org"></script>
		<link rel="stylesheet" href="../assets/style.css">
    <style>
        .message {
            padding: 1rem;
            border-left: 4px solid green;
            background-color: #eaffea;
            margin-top: 1rem;
            opacity: 0;
            transition: opacity 4s ease;
        }
        .message.shown {
            opacity: 1;
        }
    </style>
</head>
<body>
    <h2>✨ htmx:afterSettle Event Example</h2>

    <button 
        hx-get="?getMsg=1" 
        hx-target="#msg-area"
        hx-swap="innerHTML">
        Load Message
    </button>

    <div id="msg-area"></div>

    <script>
        document.body.addEventListener("htmx:afterSettle", function(evt) {
            if (evt.target.id === "msg-area") {
                const msg = document.querySelector("#msg-area .message");
                if (msg) {
                    msg.classList.add("shown"); // fade in
                    console.log("✅ afterSettle triggered, animation is applied.");
                }
            }
        });
    </script>
</body>
</html>
