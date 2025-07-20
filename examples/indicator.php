<?php if (isset($_GET['load'])): ?>
    <div id="content">
        <p>✅ Loaded content with simulated delay at: <?php echo date('H:i:s'); ?></p>
    </div>
		<?php sleep(2); ?>
<?php else: ?>
	<?php include_once("../shared/header.php"); ?>
			<h2>💫 hx-indicator Example</h2>

			<button hx-get="?load=1" hx-indicator="#spinner" hx-target="#content" hx-swap="outerHTML">
					<img id="spinner" class="htmx-indicator" src="../images/t_loading.webp" alt="loading" />
					Load with Spinner
			</button>
			<hr>
			<div id="content">
					🧪 No content loaded yet.
			</div>
	</body>
	</html>
<?php endif; ?>
