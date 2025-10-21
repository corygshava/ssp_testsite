<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>House of JRM | Coming Soon</title>

	<link rel="stylesheet" href="css/w3.css"/>
	<link rel="stylesheet" href="css/fonts.css"/>
	<link rel="stylesheet" href="css/fa-all.css"/>
	<link rel="stylesheet" href="css/soon.css"/>

	<!--<style>
		
	</style>-->

	<!-- move to common.css -->
	<style>
		/* countdown */
		.smallcard-group{
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: flex-start;
			gap: var(--size-md,24px);
		}
		.smallcard-group .smallcard{
			flex: 0 1 120px;
			border: 1px solid transparent;
			background: #fff;
			border-radius: var(--roundness);
			padding: 16px 24px;
		}
	</style>
</head>
<body>
	<div class="content">
		<!-- <div class="slideimg">
			<img src="imgs/slides/slide1.png" id="slideimg">
		</div> -->
		<div class="container">
			<div class="logo">House of JRM</div>
			<h1>Something Beautiful is Coming</h1>
			<p>Prepare for an elegant journey into timeless fashion. Our curated collection of luxury feminine wear will redefine your wardrobe.</p>

			<div class="countdown smallcard-group">
				<div class="smallcard">
					<div class="h2 themetxt" id="days">??</div>
					<div class="label">Days</div>
				</div>
				<div class="smallcard">
					<div class="h2 themetxt" id="hours">??</div>
					<div class="label">Hours</div>
				</div>
				<div class="smallcard">
					<div class="h2 themetxt" id="minutes">??</div>
					<div class="label">Minutes</div>
				</div>
				<div class="smallcard">
					<div class="h2 themetxt" id="seconds">??</div>
					<div class="label">Seconds</div>
				</div>
			</div>

			<form class="email-form w3-hide">
				<input type="email" placeholder="Your email address" required />
				<button type="submit">Notify Me</button>
			</form>

			<div class="tagline">Where Elegance Meets Simplicity</div>

			<div class="social-icons w3-hide">
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-pinterest"></i></a>
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
			</div>
		</div>
	</div>

	<script>
		makecountdown('.countdown',launchdate);
	</script>
</body>
</html>