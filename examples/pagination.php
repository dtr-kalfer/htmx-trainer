<?php
// This simulates your "data source"
$fruits = [
    "🍎 Apple", "🍌 Banana", "🍇 Grape", "🍊 Orange", "🍓 Strawberry",
    "🥝 Kiwi", "🍍 Pineapple", "🍑 Peach", "🍉 Watermelon", "🥭 Mango",
    "🍐 Pear", "🍒 Cherry", "🍋 Lemon", "🍏 Green Apple", "🫐 Blueberry"
];

$perPage = 5;
$totalPages = ceil(count($fruits) / $perPage);

$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$start = ($page - 1) * $perPage;
$items = array_slice($fruits, $start, $perPage);

// If it's an HTMX request, send only the fragment
if (isset($_GET['page'])) {
    include 'pagination-fragment.php';
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>HTMX Pagination</title>
    <script src="https://unpkg.com/htmx.org"></script>
    <style>
        body { font-family: sans-serif; padding: 1rem; }
        .fruit-list { margin-bottom: 1rem; }
        .fruit-item { padding: 0.25rem 0; }
        .pagination button { margin-right: 0.5rem; }
    </style>
</head>
<body>
    <h2>🍎 HTMX Pagination Example</h2>
    <p>This list shows only 5 fruits at a time from the server. Use the buttons to paginate.</p>

    <div id="page">
        <?php include 'pagination-fragment.php'; ?>
    </div>
</body>
</html>
