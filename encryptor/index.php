<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Super Encryptor</title>

	<link rel="stylesheet" href="../_sres/css/fa-all.css">
	<link rel="stylesheet" href="../_sres/css/w3.css">
	<link rel="stylesheet" href="../_sres/css/theme.css">

	<script src="../_sres/js/SuperScript.js"></script>
	<script src="../_sres/js/toappend.js"></script>
	<script src="../_sres/js/customalerter.js"></script>
	<script src="../_sres/js/animate.js"></script>

	<style>
		textarea{
			min-height: 120px !important;
			height: 120px !important;
		}
	</style>
</head>
<body>
	<div class="content t1">
		<h1 class="w3-center">Super Encryptor Demo</h1>

		<div class="card">
			<span class="h3">Info</span>
			<div class="w3-row-padding">
				<div class="w3-col m6">
					<label>Operation</label>
					<select id="op">
						<option value="encrypt">Encrypt</option>
						<option value="decrypt">Decrypt</option>
					</select>

					<label>Text</label>
					<textarea id="text" rows="4"></textarea>
				</div>
				<div class="w3-col m6">
					<label>Offset</label>
					<input type="number" id="offset" value="0">

					<label>Salt (slt)</label>
					<input type="text" id="slt" value="003">

					<label>Chunks</label>
					<input type="number" id="chunks" value="1">
				</div>
			</div>
			<div class="spacy-sm btn-group gap-sm">
				<button onclick="generate_samples()" class="btn outline">generate sample data</button>
				<button onclick="sendRequest()" class="btn primary">Run</button>
			</div>
		</div>

		<div>
			<div class="card" data-role="resultscard">
				<button class="btn outline w3-right" data-role="copyresult"><i class="fa fa-copy"></i></button>
				<span class="h3"><b class="det" data-role="blinker"></b> Result</span>
				<div id="result" class="muted_txt"><i>encrypted text shows here...</i></div>
			</div>
		</div>
	</div>

	<script>
		let ui_restxt = document.getElementById("result");
		let ui_blinker = document.querySelector(`[data-role="blinker"]`);
		let ui_rescard = document.querySelector(`[data-role="resultscard"]`);
		let ui_copybtn = document.querySelector(`[data-role="copyresult"]`);

		let npt_text = document.getElementById("text");
		let npt_offset = document.getElementById("offset");
		let npt_slt = document.getElementById("slt");
		let npt_chunks = document.getElementById("chunks");
		let npt_op = document.getElementById("op");

		generate_samples("sample text");

		function generate_samples(n) {
			n = n == undefined ? mekRandomString(Math.floor(getRandom(3,12))) : n;

			npt_text.value = n;
			npt_offset.value = Math.floor(getRandom(3,25));;
			npt_slt.value = mekRandomString(7);;
			npt_chunks.value = Math.floor(getRandom(3,25));
		}

		async function sendRequest() {
			// visuals
			ui_rescard.animate(fadeout,{...timing,duration: 100});
			ui_blinker.className = "det process"

			const text   = npt_text.value;
			const offset = npt_offset.value;
			const slt    = npt_slt.value;
			const chunks = npt_chunks.value;
			const op     = npt_op.value;

			const formData = new FormData();
			formData.append("text", text);
			formData.append("offset", offset);
			formData.append("slt", slt);
			formData.append("chunks", chunks);
			formData.append("op", op);

			fetch("enc/requestor", {
				method: "POST",
				body: formData
			})
			.then(res => res.json())
			.then(data => {
				// document.getElementById("result").innerText = JSON.stringify(data);
				ui_rescard.animate(slidein,{...timing,delay: 120});
				setTimeout(() => {
					ui_restxt.innerText = data.status == undefined ? data.error : data.message;
					ui_blinker.className = data.status == undefined ? "det bad" : "det good";
				},120)
			})
			.catch(err => {
				ui_rescard.animate(slidein,{...timing,delay: 120});
				setTimeout(() => {
					ui_restxt.innerText = "Error: " + err;
					ui_blinker.className = data.status == undefined ? "det bad" : "det good";
				},120)
			});
		}

		ui_copybtn.addEventListener('click',() => {
			let txt = ui_restxt.innerText;
			copytext1(txt);
			alert_success('copied to clipboard',3);
		})
	</script>
</body>
</html>