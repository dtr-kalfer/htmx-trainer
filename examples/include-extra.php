<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			echo "<p>👤 Hello " . htmlspecialchars($_POST['name']) . ", you are " . $_POST['age'] . " years old.</p>";
			exit;
	}
	include_once("../shared/header.php");
?>
	<h2>🔗 hx-include Example</h2>

	<input type="text" name="name" placeholder="Name">
	<input type="number" name="age" placeholder="Age">

	<button hx-post="include-extra.php" hx-target="#result" hx-include="[name='name'], [name='age']">
			Submit
	</button>

	<div id="result" style="margin-top: 1rem;"></div>
</body>
</html>
