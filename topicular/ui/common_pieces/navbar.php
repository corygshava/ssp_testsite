<?php
	$endat = isset($endat) ? $endat : '80%';
?>

<nav class="" data-scroller data-scrollend="<?=$endat?>" data-classdata="w3-animate-opacity,scrolled">
	<div class="navcon">
		<div class="flowline">
			<div class="logo logo_text">House of JRM</div>
		</div>

		<div class="navlinks" id="sitelinks" data-visibledata="0,0,1">
			<a href="./" class="active">home</a>
			<a href="#" data-alertme="pnrd">About us</a>
			<a href="#work" data-alertme="nrd">categories</a>
			<a href="./uikit_catalogue.php">shop</a>
			<a href="#contact" data-alertme="pnrd">Contact us</a>
		</div>

		<div class="w3-hide">
			<a href="#contact" class="btn cta-btn">
				<i class="fa fa-phone"></i>
				Reach out
			</a>
		</div>

		<div class="flowline center gap-sm" id="itemsmenu" data-visibledata="0,0,1">
			<a class="spacy-sm" href="#work" data-goto="./clientarea/" data-alertme="redirecting to client area" data-delay="1200"><i class="fa fa-user"></i></a>
			<a class="spacy-sm" href="#work" data-showpanel="wishlist" data-myholder="extrasUI"><i class="fa fa-heart"></i></a>
			<a class="spacy-sm" href="#work" data-showpanel="search" data-myholder="extrasUI"><i class="fa fa-search"></i></a>
			<a class="spacy-sm" href="#work" data-showpanel="cart" data-myholder="extrasUI"><i class="fa fa-shopping-cart"></i></a>
		</div>

		<div class="spacy-sm w3-hide-large" data-toggler="#mobilemenu" id="hamburger" data-onshow="flex">
			<a><i class="fa fa-bars"></i></a>
		</div>
	</div>
</nav>

<div class="overlay w3-animate-opacity" id="mobilemenu" style="display:none" data-shown="0" >
	<button class="btn w3-display-topright closebtn w3-transparent w3-text-black" data-toggler="#mobilemenu" data-onshow="flex"><i class="fa fa-times"></i></button>
	<div class="sidebar slide-l" data-copyme="#sitelinks" data-myparent="#mobilemenu">
	</div>
</div>

<div class="overlay w3-animate-opacity" id="xtrasmenu" style="display:none" data-shown="0">
	<button class="btn w3-display-topright closebtn w3-transparent w3-text-black" data-toggler="#xtrasmenu" data-onshow="flex"><i class="fa fa-times"></i></button>
	<div class="sidebar slide-l" data-ignoredefault data-myparent="#xtrasmenu" id="extrasUI">
		<i>Loading item</i>
	</div>
</div>

<div data-visibledata="1,1,0" class="ergomenu">
	<div class="flow gap-sm contents slide-l" data-copyme="#itemsmenu">wjninefjewhbfj</div>
	<!-- <button class="spacy-sm"><i></i></button> -->
</div>

<div class="prod_over" data-shown="0" id="prodsmodal" style="display: none;">
	<div class="prod_container anim-slide-in-left">
		<button class="btn w3-display-topright" data-visibledata="1,1,1" data-toggler=".prod_over"><i class="fa fa-times"></i> back</button>
		<div class="p_s_image">
			<img src="imgs/prods/prod_1.png" alt="Omega Speedmaster Professional Moonwatch" class="main-image">
			<div class="thumbs">
				<img src="imgs/prods/prod_1.png" alt="Thumbnail 1" class="thumb active">
				<img src="imgs/prods/prod_1.png" alt="Thumbnail 2" class="thumb">
				<img src="imgs/prods/prod_1.png" alt="Thumbnail 2" class="thumb">
			</div>
		</div>
		<div class="p_s_info">
			<span class="p_title h3">Grey Gown</span>
			<p class="p_code">GWN_234.445.331</p>
			<p class="p_price">Ksh. 6,350</p>
			<p class="p_desc">
				long and interesting description to hook viewers and convince them to buy this<br>
				it should be quite long and should be something where the first line kinda makes a point before anything else does
			</p>

			<p class="p_avl">5 pieces available</p>

			<div class="p_k_features">
				<h3>Key Features</h3>
				<ul>
					<li>70% silk</li>
					<li>Puresoft fabric</li>
				</ul>
			</div>

			<div class="qt-c">
				<div class="smaller">
					<button class="q_btn">-</button>
					<input type="number" value="1" readonly class="q_amt" min="1" max="5">
					<button class="q_btn">+</button>
				</div>
				<div class="larger">
					<button class="cartbtn">
						<i class="fas fa-shopping-cart"></i>
						Add to Cart
					</button>
					<div class="q_btn">
						<i class="far fa-heart"></i>
					</div>
					<div class="q_btn">
						<i class="fas fa-share"></i>
					</div>
				</div>
			</div>
			<hr>

			<div class="p_tags">
				<span class="p_tag">flash sale</span>
				<span class="p_tag">excecutive</span>
				<span class="p_tag">function</span>
				<span class="p_tag">event</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">flash sale</span>
				<span class="p_tag">excecutive</span>
				<span class="p_tag">function</span>
				<span class="p_tag">event</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">flash sale</span>
				<span class="p_tag">excecutive</span>
				<span class="p_tag">function</span>
				<span class="p_tag">event</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">flash sale</span>
				<span class="p_tag">excecutive</span>
				<span class="p_tag">function</span>
				<span class="p_tag">event</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">flash sale</span>
				<span class="p_tag">excecutive</span>
				<span class="p_tag">function</span>
				<span class="p_tag">event</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">flash sale</span>
				<span class="p_tag">excecutive</span>
				<span class="p_tag">function</span>
				<span class="p_tag">event</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">flash sale</span>
				<span class="p_tag">excecutive</span>
				<span class="p_tag">function</span>
				<span class="p_tag">event</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">NEW</span>
				<span class="p_tag">flash sale</span>
				<span class="p_tag">excecutive</span>
				<span class="p_tag">function</span>
				<span class="p_tag">event</span>
				<span class="p_tag">NEW</span>
			</div>
		</div>
	</div>
</div>