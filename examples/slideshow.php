<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>📖 Library Orientation Slides</title>
    <script src="https://unpkg.com/htmx.org"></script>
		<link rel="stylesheet" href="../assets/skeleton.css">
    <style>
		
			html, body {
					margin: 0;
					padding: 0;
					height: 100vh;
					width: 100vw;
					font-family: sans-serif;
					background: #f4f4f4;
					overflow: hidden; /* prevent accidental scrolling */
			}

			body {
					display: flex;
					flex-direction: column;
			}

			h1 {
					text-align: center;
					margin: 1rem 0;
					font-size: 2.5rem;
			}

			.slide-container {
					flex: 1;
					background: white;
					margin: 0 1rem;
					padding: 2rem;
					border: 2px solid #ccc;
					display: flex;
					flex-direction: column;
					justify-content: center;
					align-items: center;
					font-size: 2rem;
					overflow: auto;
			}

			.nav-buttons {
					text-align: center;
					margin: 0;
			}

			.nav-buttons button {
					margin: 0;
					padding: 0.5rem 0.5rem;
					font-size: 1rem;
			}
    </style>
</head>
<body>
    <div class="nav-buttons">
        <button id="prevBtn" disabled>⬅ Prev</button>
        <button id="nextBtn">Next ➡</button>
    </div>    

    <div id="slide-content" class="slide-container" hx-get="slides/slide_1.php" hx-trigger="load" hx-target="this" hx-swap="innerHTML">
        <!-- First slide loads here -->
    </div>

    <script>
        let currentSlide = 1;
        const totalSlides = 4; // Adjust this based on how many slide files you create

				function loadSlide(n) {
						const slideDiv = document.getElementById("slide-content");
						const url = `slides/slide_${n}.php`;

						// Programmatically send the GET request
						htmx.ajax('GET', url, {
								target: slideDiv,
								swap: 'innerHTML'
						});

						currentSlide = n;
						updateButtons();
				}

        function updateButtons() {
            document.getElementById("prevBtn").disabled = (currentSlide <= 1);
            document.getElementById("nextBtn").disabled = (currentSlide >= totalSlides);
        }

        document.getElementById("prevBtn").addEventListener("click", () => {
            if (currentSlide > 1) loadSlide(currentSlide - 1);
        });

        document.getElementById("nextBtn").addEventListener("click", () => {
            if (currentSlide < totalSlides) loadSlide(currentSlide + 1);
        });
    </script>
</body>
</html>
