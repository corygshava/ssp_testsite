// global variables
var phoneNumber = '254715360479';
var starttime = Date.now();
var api_dir = `${getcurdir()}/ui/api`;
const getui = {};

// ui variables
let ui_xtras = undefined;
let ui_xtras_sidebar = undefined;

// actions
let actions = {
	"feedback" : "./register_feedback"
}

// runtime setups
	function setupNavBar(){
		let navholders = document.querySelectorAll('.smallmenu');

		navholders.forEach((element,index) => {
			let tempo = "";
			links.forEach((element,id) => {
				id++;
				if(index == 0){
					tempo += `<a class="mybtn" id="menu${id}" onclick="curpage=${id}+1;switchtab('.tab',${id})">${element}</a>`;
				} else {
					tempo += `<a class="mybtn" id="menu${id}" onclick="curpage=${id}+1;switchtab('.tab',${id}),showIt('.sidemenu','grid')">${element}</a>`;
				}
			});

			element.innerHTML = tempo;
		});
	}

	function setupnumbers(series,sep) {
		let items = document.querySelectorAll(series);

		items.forEach((element,index) => {
			(sep == undefined) ? element.innerHTML = index + 1 : element.innerHTML = `${index + 1}${sep}${items.length}`;
		});
	}

	function setupglobaluis() {
		ui_xtras = document.querySelector('#xtrasmenu');
		if(ui_xtras != undefined){
			ui_xtras_sidebar = ui_xtras.querySelector('.sidebar') ?? undefined;
		}
	}

	function whatsappLink(phone,thetext) {
		return `(https://wa.me/${phone}?text=${thetext})`;
	}

	function setupitems() {
		let alertes = document.querySelectorAll('[data-alertme]');

		alertes.forEach(el => {
			// alert("found one")
			let aldata = el.dataset.alertme.split(",");

			if(aldata.length == 1)
				aldata.push("warning");

			aldata[0] = getlonger(aldata[0]);

			el.addEventListener('click',() => {
				showAlert(aldata[0],3,aldata[1]);
			})
		})

		let forms = document.querySelectorAll('form');

		forms.forEach(el => {
			if(el.dataset.myaction != undefined && el.dataset.myaction != ""){
				el.action = el.dataset.myaction;
			}
		})
	}

	function setupforms(){
		let feedbackforms = document.querySelectorAll('[data-feedbackform]');

		feedbackforms.forEach(e => {
			e.dataset.myaction = actions.feedback;
		})
	}

	function setupPanelSpawners() {
		let items = document.querySelectorAll('[data-showpanel]');

		items.forEach(el => {
			if(el.dataset.myholder == undefined){
				alert_danger("attempted to make a showpanel with no holder");
				el.dataset.erritem = "yes";
			} else {
				el.addEventListener('click',() => {
					showdata(el.dataset.showpanel,el.dataset.myholder);
				});
			}
		})
	}

// initialisers

// for the top search links
	function showdata(what,where) {
		// gets data to be shown and shows it. uses uiguide to pull it off
		// alert_light(`showing ${what} in ${where}`);

		if(getui['uis'].includes(what)){
			try{
				getui.worker(what)
				.then(e => {
					// alert_success(`showdata -> done getting ${what}`);
					alert_silent(`showdata -> done getting ${what}`);
				});
			} catch(e){
				// alert_danger(`showdata -> error getting ${what}: ${e}`);
				alert_silent(`showdata -> error getting ${what}: ${e}`);
			}
		} else {
			// alert_danger("showdata -> invalid ui name");
			alert_silent("showdata -> invalid ui name");
		}
	}

	getui['worker'] = async (e,arg) => {
		arg = arg == undefined ? "" : arg;

		alert_silent(`getuiworker -> opening extras, showing ${e}`);

		// show overlay
		ui_xtras.style.display = 'flex';
		ui_xtras.dataset.shown = 1;

		// run AJAX to get the data if necessary
		let ajaxres = await getmydata(e,arg);

		// alert_dark('done getting AJAX data');
		alert_silent('getuiworker -> done getting AJAX data');
		generateUI(e,ajaxres,ui_xtras_sidebar);
	}

	getui['uis'] = [
			'cart',
			'search',
			'wishlist'
		];

// for abbreviations
	function getlonger(what) {
		let abbr = {
			"nrd" : "feature not ready yet",
			"pnrd" : "page not ready yet"
		}
		let res = what;

		if(abbr[what] != undefined){
			res = abbr[res];
		}

		return res;
	}

window.addEventListener('load',() => {
	setupforms();
	setupitems();
	setupglobaluis();
	init_submitters();

	setTimeout(() => {
		// for things that run after UIops is done doing its thing
		setupPanelSpawners();
	},280)
})

window.addEventListener('keydown',e => {
	// console.log('key gotten',e);
	let items = [];

	if(e.key.toLowerCase() == "escape"){
		let prodmodal = document.querySelector('#prodsmodal');
		prodmodal.dataset.mysel = '#prodsmodal';
		items.push(prodmodal);

		items.forEach(el => {
			if(el.dataset.shown == "1"){
				e.preventDefault();
				toggleShow(el.dataset.mysel);
			}
		})
	}

})

// reusables x specifics
function getcurdir(){
	let loc = window.location.href;
	let spl = loc.split("://");
	let pre = spl[1].split("/");
	pre.pop();
	let res = spl[0] + "://" + pre.join("/");

	console.log(loc)

	return res;
}