function generateUI(purpose,ajaxres,desti) {
	purpose = purpose == undefined ? 'leavenow' : purpose.toLowerCase();
	// let des = document.querySelector(desti);

	if(desti == undefined){
		alert_danger('genui -> invalid display container');
		return;
	}

	desti.innerHTML = "";

	switch(purpose){
	case 'cart':
		g_Cart(ajaxres,desti);
		break;
	case 'search':
		g_Search(ajaxres,desti);
		break;
	case 'wishlist':
		g_Wish(ajaxres,desti);
		break;
	default:
		alert_danger('genui -> invalid UI generator');
		break;
	}
}

function g_Cart(reqres,where) {
	// items format: {pic,itemname,totalcost}

	let items = reqres.data;
	let outr = document.createElement('div');
	let styles = "";


	let mekstarter = () => {
		outr.innerHTML = searchui_base();
		outr.className = "stack centroid thecontainer";
	}

	let setEvents = () => {
		setTimeout(() => {
			// addlater:
			// events for checkout, removing items and clicking on items

			alert_silent("cartgen: done setting up events")
		},50)
	}

	console.log('items: ',items);

	if(items.length == 0 || typeof(items) == "string"){
		outr.innerHTML = standin('cart is empty');
		outr.className = "stack centroid";
	} else {
		outr.innerHTML = standin('found search items');
		outr.className = "stack centroid w3-black";
		styles = "display: flex;justify-content:center;align-items:center;flex-direction:column";
		outr.classList.add("w3-green");
	}

	outr.setAttribute("style",styles);

	where.appendChild(outr);
}

function g_Search(reqres,where) {
	// items format: {pic,itemname,totalcost}

	let items = reqres.data;
	let outr = document.createElement('div');
	let styles = "";

	let mekstarter = () => {
		outr.innerHTML = searchui_base();
		outr.className = "stack centroid thecontainer";
	}

	let setEvents = () => {
		setTimeout(() => {
			let stxt = "";

			let runsearch = () => {
				alert_success('searching...');

				let _npt = outr.querySelector('[data-searchnpt]');
				let _stxt = _npt.value;
				let _res = outr.querySelector('.searchresults');

				_res.innerHTML = standin(`searching for <b>${_stxt}</b> ...`);

				// addlater: search logic goes here
			}

			searchinput = outr.querySelector('input');

			if(searchinput != undefined){
				searchinput.addEventListener('input',() => {
					stxt = searchinput.value;
				})

				searchinput.addEventListener('keydown',(e) => {
					stxt = searchinput.value;

					if(e.key.toLowerCase() == "enter"){
						runsearch();
					}
				})
			}

			searchbtn = outr.querySelector('.btn');

			if(searchbtn != undefined){
				searchbtn.addEventListener('click',() => {
					runsearch();
				})
			}

			alert_silent("searchgen: done setting up events")
		},50)
	}

	console.log('items: ',items);

	if(items.length == 0 || typeof(items) == "string"){
		mekstarter();
	} else {
		let searchsel = '.searchresults';
		let resultsbox = where.querySelector(searchsel);

		if(resultsbox == undefined){
			mekstarter();
		} else {
			outr.innerHTML = where.innerHTML;
		}

		resultsbox = outr.querySelector(searchsel);

		if(resultsbox == undefined){
			alert_danger("resultsbox still not found");
			return;
		} else {
			alert_success("resultbox available");

			searchresults(items,resultsbox);
		}
	}

	outr.setAttribute("style",styles);

	where.appendChild(outr);
	setEvents();
}

function g_Wish(reqres, where) {
	// items format: {pic,itemname,totalcost}

	let items = reqres.data;
	let outr = document.createElement('div');
	let styles = "";

	let mekstarter = () => {
		outr.innerHTML = wishui_base();
		outr.className = "stack centroid thecontainer";
	}

	let setEvents = () => {
		setTimeout(() => {
			// addlater:
			// events for searching thru items, removing items and clicking on items

			alert_silent("wishgen: done setting up events")
		},50)
	}

	console.log('items: ',items);

	if(items.length == 0 || typeof(items) == "string"){
		mekstarter();
	} else {
		let searchsel = '.searchresults';
		let resultsbox = where.querySelector(searchsel);

		if(resultsbox == undefined){
			mekstarter();
		} else {
			outr.innerHTML = where.innerHTML;
		}

		resultsbox = outr.querySelector(searchsel);

		if(resultsbox == undefined){
			alert_danger("resultsbox still not found");
			return;
		} else {
			alert_success("resultbox available");

			searchresults(items,resultsbox);
		}
	}

	outr.setAttribute("style",styles);

	where.appendChild(outr);
	setEvents();
}