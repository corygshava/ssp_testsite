<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>House of JRM | 404</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Fonts: refined serif + airy script -->
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Dancing+Script:wght@400&display=swap" rel="stylesheet">

	<style>
		:root {
			--blush: #fdf2f6;
			--rose: #e9b4c5;
			--gold: #d4af37;
			--charcoal: #333;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			background: var(--blush);
			color: var(--charcoal);
			font-family: "Playfair Display", serif;
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			text-align: center;
		}

		.container {
			max-width: 480px;
			padding: 40px 30px;
			border: 1px solid var(--rose);
			border-radius: 8px;
			background: #fff;
			box-shadow: 0 8px 20px rgba(233, 180, 197, 0.25);
		}

		h1 {
			font-size: 120px;
			font-weight: 600;
			color: var(--gold);
			letter-spacing: -4px;
		}

		h2 {
			font-family: "Dancing Script", cursive;
			font-size: 42px;
			color: var(--rose);
			margin: -10px 0 20px;
		}

		p {
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 30px;
		}

		.btn-home {
			display: inline-block;
			padding: 14px 36px;
			font-size: 16px;
			text-transform: uppercase;
			letter-spacing: 2px;
			color: #fff;
			background: var(--gold);
			border: none;
			/*border-radius: 30px;*/
			text-decoration: none;
			transition: background 0.3s ease;
			cursor: pointer;
		}

		.btn-home:hover {
			background: #bb9526;
		}

		@media (max-width: 480px) {
			h1 { font-size: 90px; }
			h2 { font-size: 34px; }
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>404</h1>
		<h2>Oops, darling</h2>
		<p>
			The page you’re looking for drifted away like silk in the breeze.<br>
			Let’s get you back to somewhere exquisite.
		</p>
		<a href="/" class="btn-home">Return Home</a>
	</div>
</body>
</html>