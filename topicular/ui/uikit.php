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
		.prods_deets{
			display: flex;
			flex-wrap: wrap;
			flex-direction: row;
			justify-content: center;
			/*align-items: stretch;*/
			gap: var(--size-md);
		}
		.prods_deets>div{
			flex: 0 0 300px;
			max-width: 300px;
		}

		.prods_deets .prods_image{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: stretch;
			width: 100%;
		}
		.prods_deets .prods_image .mainimg{
			--modheight: 60vh;
			height: var(--modheight);
			overflow: hidden;
			background: red;
			display: flex;
			justify-content: center;
			align-items: center;
			background: red;
		}
		.prods_deets .prods_image .mainimg img{
		    border-radius: var(--roundness);
		    height: var(--modheight);
		}
		.prods_deets .prods_image .imgsholder{
			overflow: auto hidden;
			height: 30vh;
			padding: 16px;
		}
		.prods_deets .prods_image .imgmenu{
			display: flex;
			flex-direction: row;
			justify-content: flex-start;
			flex-wrap: no-wrap;
		}
		.prods_deets .prods_image .imgmenu img {
		    height: 96px;
		    aspect-ratio: 1;
		    object-fit: cover;
		    padding: 8px;
		    border: 2px solid green;
		    border-radius: var(--roundness);
		}

		.prods_deets .prod_info{
			width: 100%;
		}
	</style>
</head>
<body>
	<?php
		include 'common_pieces/navbar.php';
	?>

	<div class="banner w3-top flowline gap-sm" id="curbanner" data-scroller data-scrollend="70%" data-classdata="w3-animate-opacity,hidetop">
		<div class="thetext">
			work in progress
		</div>
		<!-- <a href="#pricing">Learn more →</a> -->
	</div>

	<div class="banner w3-top flowline gap-sm w3-hide" id="curbanner" data-scroller data-scrollend="70%" data-classdata="w3-animate-opacity,hidetop">
		<div class="thetext">
			A brand new collection Awaits
		</div>
		<a href="#pricing">Learn more →</a>
	</div>
	
	<div class="themetag w3-block w3-center">Hero section</div>

	<section class="hero section" id="home">
		<div class="container flow center fullheight gap-md">
			<span class="hedtxt">Let your <b class="logo_text">Style</b><br> shine bright</span>
			<p>the newest and most headturning outfits for the modern woman.</p>
			<div class="btn-group">
				<a href="uikit_catalogue.html" class="btn outline">shop now</a>
				<!-- <a href="#work" class="btn outline">Our Work</a> -->
			</div>
		</div>
	</section>

	<div class="themetag w3-block w3-center">full width showcase</div>

	<div class="spacy-mg w3-center">
		<h1 class="h2">Dressing that makes a <b class="logo_text">Statement</b></h1>
		<p>Our Dresses are crafted with the aim to make you the center of attention in any room</p>
	</div>

	<div class="themetag w3-block w3-center">double banners</div>

	<div class="grid-50-50 nogap">
		<div class="imgholder w3-hide-small">
			<img src="imgs/slides/slide2.jpg" alt="Code editor">
			<div class="theoverlay w3-display-bottomleft left">
				<h2 class="h2"><b class="logo_text w3-text-white">Elegant</b></h2>
				<p>A look that will turn heads wherever you go</p>
				<a href="uikit_catalogue.html" class="btn primary">shop now</a>
			</div>
		</div>
		<div class="imgholder">
			<img src="imgs/slides/slide2.jpg" alt="Code editor">
			<div class="theoverlay w3-display-topleft right">
				<h2 class="h2"><b class="logo_text w3-text-white">Beautiful</b></h2>
				<p>A look that will turn heads wherever you go</p>
				<a href="uikit_catalogue.html" class="btn primary">shop now</a>
			</div>
		</div>
	</div>

	<div class="themetag w3-block w3-center">Categories showcase</div>
	<div class="spacy-md w3-animate-opacity" data-scroller data-showonscroll data-scrollend="70%">
		<div class="w3-center">
			<h2 class="h2 logo_text">Categories</h2>
			<p>plenty of options for the modern woman</p>
		</div>

		<div class="categories">
			<div class="category" data-alertme="nrd">
				<img src="imgs/slides/slide1.png">
				<div class="mycaption">
					<span>Casual</span>
				</div>
			</div>
			<div class="category" data-alertme="nrd">
				<img src="imgs/slides/slide1.png">
				<div class="mycaption">
					<span>Official</span>
				</div>
			</div>
			<div class="category" data-alertme="nrd">
				<img src="imgs/slides/slide1.png">
				<div class="mycaption">
					<span>Event</span>
				</div>
			</div>
			<div class="category" data-alertme="nrd">
				<img src="imgs/slides/slide1.png">
				<div class="mycaption">
					<span>Everyday outfit</span>
				</div>
			</div>
		</div>
	</div>

	<div class="themetag w3-block w3-center">Text section (right)</div>

	<div class="grid-50-50 nogap">
		<div class="imgholder w3-hide-small">
			<img src="imgs/slides/slide2.jpg" alt="Code editor">
			<div class="theoverlay w3-display-bottomleft left w3-hide">
				<h2 class="h2"><b class="logo_text w3-text-white">Elegant</b></h2>
				<p>A look that will turn heads wherever you go</p>
				<a href="uikit_catalogue.html" class="btn primary">shop now</a>
			</div>
		</div>
		<div class="flow left spacy-md">
			<span class="h2">Who are we</span>
			<hr>
			<p>
				We are a brand created to make outfits that make every woman more confident
			</p>
		</div>
	</div>

	<div class="themetag w3-block w3-center">Text section (left)</div>

	<div class="grid-50-50 nogap">
		<div class="flow right spacy-md w3-right-align">
			<span class="h2">Who are we</span>
			<hr>
			<p>
				We are a brand created to make outfits that make every woman more confident
			</p>
		</div>
		<div class="imgholder w3-hide-small">
			<img src="imgs/slides/slide2.jpg" alt="Code editor">
		</div>
	</div>

	<div class="themetag w3-block w3-center">products showcase</div>
	<div class="spacy-md">
		<div class="w3-center">
			<h2 class="h2 logo_text">New arrivals</h2>
			<p>Our latest creations</p>
		</div>

		<div class="products">
			<div class="product-card" data-toggler="#prodsmodal" data-onshow="flex">
				<img src="imgs/prods/prod_1.png" alt="Emmelina">
				<div class="product-name">Grey Luxury Dress</div>
				<div class="product-price">Ksh 25,000</div>
				<div class="w3-display-topright">
					<button class="liker"><i class="fa fa-heart"></i></button>
				</div>
				<div>
					<button class="w3-black w3-btn w3-block themehover"><i class="fa fa-plus"></i> Add to cart</button>
				</div>
			</div>
			<div class="product-card" data-toggler="#prodsmodal" data-onshow="flex">
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
			<div class="product-card" data-toggler="#prodsmodal" data-onshow="flex">
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
			<div class="product-card" data-toggler="#prodsmodal" data-onshow="flex">
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

	<div class="themetag w3-block w3-center">Contacts section (left)</div>

	<div class="grid-50-50 nogap">
		<div class="flow right spacy-nm w3-right-align">
			<div>
				<span class="h2">Leave us a message</span>
				<p>We'd love to hear from you.</p>
			</div>
			<form data-feedbackform method="post" class="myform">
				<div class="input-group">
					<label>email</label>
					<input type="email" name="themail" placeholder="enter your email here..." required>
				</div>
				<div class="input-group">
					<label>subject (optional)</label>
					<input type="text" name="themail" placeholder="enter your email here...">
				</div>
				<div class="input-group">
					<label>message</label>
					<textarea rows="3" placeholder="message goes here" required></textarea>
				</div>
				<div class="flowline right">
					<button type="reset" class="btn outline dark"><i class="fa fa-times"></i> Reset form</button>
					<button type="submit" class="btn primary">Send message <i class="fa fa-paper-plane"></i></button>
				</div>
			</form>
		</div>
		<div class="imgholder w3-hide-small">
			<img src="imgs/utility/ai_contact_us.jpg" alt="Code editor">
		</div>
	</div>

	<div class="themetag w3-block w3-center">Contacts section (right)</div>

	<div class="grid-50-50 nogap">
		<div class="imgholder w3-hide-small">
			<img src="imgs/utility/ai_contact_us_graded.png" alt="Code editor">
		</div>
		<div class="flow left spacy-nm w3-left-align">
			<div>
				<span class="h2">Leave us a message</span>
				<p>We'd love to hear from you.</p>
			</div>
			<form data-feedbackform method="post" class="myform">
				<div class="input-group">
					<label>email</label>
					<input type="email" name="themail" placeholder="enter your email here..." required>
				</div>
				<div class="input-group">
					<label>subject (optional)</label>
					<input type="text" name="themail" placeholder="enter your email here...">
				</div>
				<div class="input-group">
					<label>message</label>
					<textarea rows="3" placeholder="message goes here" required></textarea>
				</div>
				<div>
					<button type="reset" class="btn outline dark"><i class="fa fa-times"></i> Reset form</button>
					<button type="submit" class="btn primary">Send message <i class="fa fa-paper-plane"></i></button>
				</div>
			</form>
		</div>
	</div>

	<div class="themetag w3-block w3-center">callouts and announcements section</div>

	<section class="callout t1">
		<div class="container">
			<span class="hedtxt2">Be that confident Woman <b>Today</b></span>
			<p>Find The perfect outfits for work and cocktail events</p>
			<button class="btn outline">lets begin</button>
		</div>
	</section>

	<?php
		include 'common_pieces/footer.php';
	?>
</body>
</html>