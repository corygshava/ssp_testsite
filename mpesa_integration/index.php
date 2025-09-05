<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mpesa testsite</title>

	<link rel="stylesheet" href="../_sres/css/fa-all.css">
	<link rel="stylesheet" href="../_sres/css/w3.css">
	<link rel="stylesheet" href="../_sres/css/theme.css">

	<script src="../_sres/js/SuperScript.js"></script>
	<script src="../_sres/js/toappend.js"></script>
	<script src="../_sres/js/customalerter.js"></script>
	<script src="../_sres/js/animate.js"></script>

	<style>
		body {
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif !important;
		}

		.btn.opt {
			font-weight: 800 !important;
			min-width: 200px;
			text-decoration: none;
			text-align: center;
		}

		.btn.secondary {
			background-color: #f8f9fa;
			color: #3c4043;
			border: 1px solid #dadce0;
		}

		.btn.secondary:hover {
			background-color: #f1f3f4;
			box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
		}

		.btn.success {
			border: 1px solid #34a853;
			color: white;
		}

		.btn.success:hover {
			background-color: #2d8f47;
			transform: translateY(-1px);
			box-shadow: 0 4px 12px rgba(52, 168, 83, 0.3);
		}

		.btn.danger {
			background-color: #ea4335;
			color: white;
		}

		.btn.danger:hover {
			background-color: #d33b2c;
			transform: translateY(-1px);
			box-shadow: 0 4px 12px rgba(234, 67, 53, 0.3);
		}

		.btn.warning {
			background-color: #fbbc05;
			color: #3c4043;
		}

		.btn.warning:hover {
			background-color: #f9ab00;
			transform: translateY(-1px);
			box-shadow: 0 4px 12px rgba(251, 188, 5, 0.3);
		}
	</style>
</head>
<body>
	<div class="content t1 gap-md">
		<h1 class="w3-center">Mpesa Playground</h1>
		<div class="card w3-center centroid-col">
			<span class="h3">Actions</span>
			<div class="stack gap-sm centroid" data-role="btns_holder" style="width: 300px;">
				<a class="btn opt success" data-role="test_access">Get access token</a>
				<a class="btn opt success" data-role="test_lastlog">check last log</a>
				<div><hr></div>
				<a class="btn opt outline" data-role="test_stk">Run Stk push</a>
				<!-- <a class="btn opt primary" href="#res">Check transaction status</a> -->
			</div>
		</div>

		<div>
			<div class="card" data-role="resultscard" id="res">
				<button class="btn outline w3-right" data-role="copyresult"><i class="fa fa-copy"></i></button>
				<span class="h3"><b class="det" data-role="blinker"></b> Result</span>
				<div id="result" class="muted_txt"><i>Query result shows here...</i></div>
			</div>
		</div>
	</div>

	<!-- invisimedia -->
	<audio></audio>

	<script>
		let ui_restxt = document.getElementById("result");
		let ui_blinker = document.querySelector(`[data-role="blinker"]`);
		let ui_rescard = document.querySelector(`[data-role="resultscard"]`);
		let ui_sfx = document.querySelector('audio');

		let ui_copybtn = document.querySelector(`[data-role="copyresult"]`);

		let uibtns = document.querySelector('[data-role="btns_holder"]');
		let btn1 = uibtns.querySelector('[data-role="test_access"]');
		let btn2 = uibtns.querySelector('[data-role="test_stk"]');
		let btn3 = uibtns.querySelector('[data-role="test_lastlog"]');

		let defaultheader = {
			"Content-Type": "application/x-www-form-urlencoded"
		};

		function updateRes(data,smartdata) {
			ui_rescard.animate(slidein,{...timing,delay: 120});
			setTimeout(() => {
				audsrc = data.error == undefined ? '../_sres/sfx/good.mp3' : '../_sres/sfx/bad.mp3';
				ui_restxt.innerHTML = data.error != undefined ? data.error : (smartdata == false ? JSON.stringify(data) : smarten(data));
				ui_blinker.className = data.error != undefined ? "det bad" : "det good";

				if(ui_sfx == undefined){
					return;
				}

				if(!ui_sfx.ended){
					ui_sfx.pause();
				}

				ui_sfx.src = audsrc;
				ui_sfx.play();
			},120);
		}

		function smarten(data) {
			let outht = ``;

			outht = renderObj(data);

			return outht;
		}

		function renderObj(obj) {
			let html = "";

			for (const key in obj) {
				const val = obj[key];

				if (Array.isArray(val)) {
					html += `<div><b>${key}:</b><ul>`;
					val.forEach(item => {
						if (typeof item === "object" && item !== null) {
							html += `<li>${renderObj(item)}</li>`;
						} else {
							html += `<li>${item}</li>`;
						}
					});
					html += `</ul></div>`;
				} 
				else if (typeof val === "object" && val !== null) {
					html += `<div><b>${key}:</b><ul>${renderObj(val)}</ul></div>`;
				} 
				else {
					html += `<div><b>${key}: </b>${val}</div>`;
				}
			}

			return html;
		}

		function hideres() {
			ui_rescard.animate(fadeout,{...timing,duration: 100});
			ui_blinker.className = "det process";
		}

		// [fetch ops]--------------------------------------------------------------------------------------
		async function callAPI(method, url, data = null, headers = {},forcetext = false) {
			const options = {
				method: method.toUpperCase(),
				headers: {
					"Content-Type": "application/json",
					...headers
				}
			};

			if (data) {
				if (method.toUpperCase() === "GET") {
					// append data as query params
					const query = new URLSearchParams(data).toString();
					url += (url.includes("?") ? "&" : "?") + query;
				} else {
					// send data as JSON body
					options.body = typeof data === "string" ? data : JSON.stringify(data);
				}
			}

			try {
				const response = await fetch(url, options);
				const contentType = response.headers.get("content-type");

				if (!response.ok) {
					throw new Error(`HTTP error ${response.status}`);
				}

				if ((contentType && contentType.includes("application/json")) && !forcetext) {
					return await response.json();
				} else {
					return await response.text();
				}
			} catch (error) {
				return { error: error.message };
			}
		}

		function test_access() {
			// alert_dark('starting');
			hideres();

			let apires = callAPI(
				'post',
				'mpesa/get_access_token',
				null,
				defaultheader,
				true
			);

			apires.then(dta => {
				updateRes(JSON.parse(dta),true);
			})
		}

		function test_stk() {
			// alert_dark('starting');
			hideres();

			let apires = callAPI(
				'post',
				'mpesa/send_stk_push',
				null,
				defaultheader,
				true
			);

			apires.then(dta => {
				updateRes(JSON.parse(dta),true);
			})
		}

		function test_lastlog() {
			// alert_dark('starting to check the log');
			hideres();

			let apires = callAPI(
				'post',
				'mpesa/check_last_log',
				null,
				defaultheader,
				true
			);

			// alert_dark('starting to check the log');
			apires.then(dta => {
				updateRes(JSON.parse(dta),true);
				// alert("an error didnt happened");
				// alert_success('should be done');
			}).catch(dta => {
				updateRes(JSON.parse(dta),true);
				// alert_danger('something threw a spanner in the works');
				// alert("an error happened");
			})
		}

		// -------------------------------------------------------------------------------------------------

		ui_copybtn.addEventListener('click',() => {
			let txt = ui_restxt.innerText;
			copytext1(txt);
			alert_success('copied to clipboard',3);
		});

		btn1.addEventListener('click',() => {
			test_access();
		})

		btn2.addEventListener('click',() => {
			test_stk();
		})

		btn3.addEventListener('click',() => {
			test_lastlog();
		})
	</script>
</body>
</html>