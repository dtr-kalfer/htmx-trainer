<div class="fruit-list">
    <?php foreach ($items as $fruit): ?>
        <div class="fruit-item"><?= $fruit ?></div>
    <?php endforeach; ?>
</div>

<div class="pagination">
    <button 
        hx-get="pagination.php?page=<?= $page - 1 ?>" 
        hx-target="#page" 
        hx-push-url="true" 
        <?= $page <= 1 ? 'disabled' : '' ?>>
        ◀️ Prev
    </button>

    <span>Page <?= $page ?> of <?= $totalPages ?></span>

    <button 
        hx-get="pagination.php?page=<?= $page + 1 ?>" 
        hx-target="#page" 
        hx-push-url="true" 
        <?= $page >= $totalPages ? 'disabled' : '' ?>>
        Next ▶️
    </button>
</div>
