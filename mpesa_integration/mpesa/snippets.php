<?php
	echo '
		<style>
			.error-box {
				max-width: 500px;
				margin: 40px auto;
				padding: 20px;
				border-radius: 12px;
				background: #ffe6e6;
				border: 1px solid #ff4d4d;
				font-family: Arial, sans-serif;
				color: #b30000;
				box-shadow: 0 4px 12px rgba(0,0,0,0.1);
			}
			.error-title {
				font-size: 1.2em;
				font-weight: bold;
				margin-bottom: 8px;
				display: flex;
				align-items: center;
			}
			.error-title::before {
				content: "⚠️";
				margin-right: 8px;
			}
			.error-description {
				font-size: 0.95em;
				line-height: 1.4em;
			}
		</style>
	';

	function showerror($title='test title',$desc='test desc'){
		$errdata = "
			<div class=\"error-box\">
				<div class=\"error-title\">$title</div>
				<div class=\"error-description\">$desc</div>
			</div>
		";

		return $errdata;
	}

	function showerror_2($what){
		$wat = json_decode($what);

		// echo "$what";
		return showerror($wat->error,$wat->error_description);
	}
?>