let standin = (dta) => {
	return `
		<div class="standin">
			${dta}
		</div>
	`;
}

// search UI pieces
let searchui_base = () => {
	return `
		<div class="searchbox">
			<input type="search" placeholder="search for something..." data-searchnpt>
			<button class="btn primary"><i class="fa fa-search"></i></button>
		</div>
		<div class="searchresults">
			${standin('search results appear here')}
		</div>
	`;
}

let searchresults = (results,holder) => {
	if(holder == undefined){
		alert_danger('searchres: invalid holder');
		return;
	}
	let mydiv = document.createElement('div');
	let outht = standin('no results found');

	if(results.length > 0 && typeof(results) == "array"){
		outht = "";
		results.forEach(el => {
			outht += standin(JSON.parse(el));
		})
	}

	mydiv.innerHTML = outht;

	holder.appendChild(mydiv);
}

// wishlist ui pieces
let wishui_base = () => {
	return `
		<div class="searchbox">
			<input type="search" placeholder="search your wishlist..." data-searchnpt>
			<button class="btn primary"><i class="fa fa-search"></i></button>
		</div>
		<div class="wishlist">
			${standin('search results appear here')}
		</div>
	`;
}