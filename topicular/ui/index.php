<?php
	include 'common_pieces/siteinfo.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$sitetitle?> - Home</title>

	<?php
		include 'common_pieces/head_meta_index.php';
		include 'common_pieces/head_styles.php';
		include 'common_pieces/head_scripts.php';
	?>
</head>
<body>
	<?php
		include 'common_pieces/navbar.php';
	?>

	<?php
		require 'common_pieces/site_uikit.php';
	?>

	<div style="translate: -8px;">
	<?php
		$siteuikit->_renderhero();
		$siteuikit->_rendercallout('Dressing that makes a <b class="logo_text">Statement</b>','Our Dresses are crafted with the aim to make you the center of attention in any room');
		$siteuikit->_renderdoublebanners();
		$siteuikit->_rendercategories();
		$siteuikit->_renderprodlist();
	?>
	</div>

	<?php
		include 'common_pieces/footer.php';
	?>
</body>
</html>