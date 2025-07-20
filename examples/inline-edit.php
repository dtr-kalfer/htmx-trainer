<?php
if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
    parse_str(file_get_contents("php://input"), $_PATCH);
    echo "<div contenteditable='true' class='editable' hx-patch='inline-edit.php' hx-trigger='blur' hx-target='this'>"
        . htmlspecialchars($_PATCH['value']) . "</div>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/htmx.org"></script>
    <style>
        .editable {
            padding: 0.5rem;
            border: 1px dashed #aaa;
            display: inline-block;
        }
        .editable:focus {
            outline: none;
            border-color: #3498db;
        }
    </style>
</head>
<body>
    <h2>📝 Inline Editing Example</h2>

    <div contenteditable="true"
         class="editable"
         hx-patch="inline-edit.php"
         hx-trigger="blur"
         hx-target="this"
         name="value">
        Click to edit me!
    </div>
</body>
</html>
