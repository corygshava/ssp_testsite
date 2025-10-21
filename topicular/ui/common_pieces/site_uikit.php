<?php
	$siteuikit = new uikit();
?>

<?php
	class uikit{
		public $hero = '';

		public function _renderhero(){
			echo '
				<section class="hero section" id="home">
					<div class="container flow center fullheight gap-md">
						<span class="hedtxt">Let your <b class="logo_text">Style</b><br> shine bright</span>
						<p>the newest and most headturning outfits for the modern woman.</p>
						<div class="btn-group">
							<a href="./uikit_catalogue" class="btn outline">shop now .</a>
							<!-- <a href="#work" class="btn outline">Our Work</a> -->
						</div>
					</div>
				</section>
			';
		}

		public function _rendercallout($heading,$content){
			$tempres = '
				<div class="spacy-mg w3-center">
					<h1 class="h2">'.$heading.'</h1>
					<p>'.$content.'</p>
				</div>
			';

			echo $tempres;
		}

		public function _renderdoublebanners(){
			echo '<div class="grid-50-50 nogap">
				<div class="imgholder w3-hide-small">
					<img src="imgs/slides/515859865_1441200413900770_7723379312339377874_n.heic" alt="Code editor">
					<div class="theoverlay w3-display-bottomleft left">
						<h2 class="h2"><b class="logo_text w3-text-white">Elegant</b></h2>
						<p>A look that will turn heads wherever you go</p>
						<a href="uikit_catalogue.html" class="btn primary">shop now</a>
					</div>
				</div>
				<div class="imgholder">
					<img src="imgs/slides/502593380_677962065255219_4839403284847503159_n.heic" alt="Code editor">
					<div class="theoverlay w3-display-topleft right">
						<h2 class="h2"><b class="logo_text w3-text-white">Beautiful</b></h2>
						<p>A look that will turn heads wherever you go</p>
						<a href="uikit_catalogue.html" class="btn primary">shop now</a>
					</div>
				</div>
			</div>';
		}

		public function _rendercategories(){
			echo '<div class="spacy-md w3-animate-opacity" data-scroller data-showonscroll data-scrollend="70%">
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
			</div>';
		}

		public function _renderprodlist($thetype='new arrivals'){
			echo '<div class="spacy-md">
					<div class="w3-center">
						<h2 class="h2 logo_text">'.$thetype.'</h2>
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
				</div>';
		}
	}
?>