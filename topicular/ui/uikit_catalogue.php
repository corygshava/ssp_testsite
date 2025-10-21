<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JRM fashionhouse - Site UI kit</title>

	<?php
		include 'common_pieces/head_styles.php';
		include 'common_pieces/head_scripts.php';
	?>

	<style>
		.viewmenu{
			padding: 24px;
			display: flex;
			justify-content: space-between;
		}
	</style>
</head>
<body>
	<?php
		$endat = '20%';
		include 'common_pieces/navbar.php';
	?>

	<div class="banner w3-top flowline gap-sm" id="curbanner" data-scroller data-scrollend="50%" data-classdata="w3-animate-opacity,hidetop">
		<div class="thetext">
			A brand new collection Awaits
		</div>
		<a href="#pricing">Learn more →</a>
	</div>
	
	<div class="themetag w3-block w3-center w3-hide">Hero section</div>

	<section class="hero section small" id="home">
		<div class="herotxt flow center gap-md">
			<span class="h2">Our <b class="logo_text">Shop</b></span>
			<p>Your wardrobe will thank you.</p>
		</div>
	</section>

	<div class="themetag w3-block w3-center">products showcase</div>
	<div class="spacy-md">
		<div class="viewmenu">
			<div>
				<button class="btn primary">sort <i class="fa fa-chevron-down"></i></button>
				<button class="btn primary">category: Dresses <i class="fa fa-chevron-down"></i></button>
			</div>
			<div>
				<h2>5 items</h2>
			</div>
		</div>

		<div class="products">
			<div class="product-card">
				<img src="imgs/slides/slide1.png" alt="Emmelina">
				<div class="product-name">Pink luxury dress</div>
				<div class="product-price">Ksh 25,000</div>
				<div class="w3-display-topright">
					<button class="liker"><i class="fa fa-heart"></i></button>
				</div>
				<div>
					<button class="w3-black w3-btn w3-block themehover"><i class="fa fa-plus"></i> Add to cart</button>
				</div>
			</div>
			<div class="product-card">
				<img src="imgs/slides/slide1.png" alt="Emmelina">
				<div class="product-name">Pink luxury dress</div>
				<div class="product-price">Ksh 25,000</div>
				<div class="w3-display-topright">
					<button class="liker"><i class="fa fa-heart"></i></button>
				</div>
				<div>
					<button class="w3-black w3-btn w3-block themehover"><i class="fa fa-plus"></i> Add to cart</button>
				</div>
			</div>
			<div class="product-card">
				<img src="imgs/slides/slide1.png" alt="Emmelina">
				<div class="product-name">Pink luxury dress</div>
				<div class="product-price">Ksh 25,000</div>
				<div class="w3-display-topright">
					<button class="liker"><i class="fa fa-heart"></i></button>
				</div>
				<div>
					<button class="w3-black w3-btn w3-block themehover"><i class="fa fa-plus"></i> Add to cart</button>
				</div>
			</div>
			<div class="product-card">
				<img src="imgs/slides/slide1.png" alt="Emmelina">
				<div class="product-name">Pink luxury dress</div>
				<div class="product-price">Ksh 25,000</div>
				<div class="w3-display-topright">
					<button class="liker active"><i class="fa fa-heart"></i></button>
				</div>
				<div>
					<button class="w3-black w3-btn w3-block themehover"><i class="fa fa-plus"></i> Add to cart</button>
				</div>
			</div>
			<div class="product-card">
				<img src="imgs/slides/slide1.png" alt="Emmelina">
				<div class="product-name">Pink luxury dress</div>
				<div class="product-price">Ksh 25,000</div>
				<div class="w3-display-topright">
					<button class="liker"><i class="fa fa-heart"></i></button>
				</div>
				<div>
					<button class="w3-black w3-btn w3-block themehover"><i class="fa fa-plus"></i> Add to cart</button>
				</div>
			</div>
		</div>
	</div>

	<?php
		include 'common_pieces/footer.php';
	?>
</body>