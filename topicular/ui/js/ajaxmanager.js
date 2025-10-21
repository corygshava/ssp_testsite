// for getting data from the backend
const default_retobj = {
	success: false,
	data: [],
	sessionstarted: false
}

const getmydata = async (w,arg) => {
	// alert_warning(`Attempting to get data for ${w}`);
	alert_silent(`getmydata -> Attempting to get data for ${w}`);

	let theresult = default_retobj;
	let thepayload = payloads.hasOwnProperty(w) ? payloads[w](arg) : undefined;

	if(thepayload == undefined){
		alert_danger(`getmydata -> payload for ${w} not found`);
		return theresult;
	}

	let theurl = thepayload.where;
	let thebody = thepayload.params;

	try{
		// gets data from the API
		let req = await fetch(
			theurl,
			thebody
		);

		let response = await req.text();
		let parseddata = [];

		// alert_dark(response);               // test if the text returned is valid JSON
		alert_silent(["response run and recieved",response]);

		if(req.status == 200){
			parseddata = JSON.parse(response);
			if(parseddata.success){
				// alert_success(parseddata.data);
				alert_silent(["getuiworker -> ",parseddata]);
			} else{
				// alert_danger(parseddata.data);
				alert_silent(["getuiworker -> ",parseddata]);
			}
		}else{
			alert_danger(`getuiworker -> [${dta.status}] : ${dta.statusText}`);
			alert_silent(`getuiworker -> [${dta.status}] : ${dta.statusText}`);
			throw new Error("getuiworker -> Error processing AJAX request");
		}

		theresult = parseddata;
		// window.open(theurl,"_blank");    // test if the page is sending the data to the right address
	} catch(err) {
		alert_danger(err);
		return default_retobj;
	}

	return theresult;
}

// for the fetch body
const payloads = {};

payloads['cart'] = (arg) => {
	return {
		where: `${api_dir}/get_something.php`,
		params: {
					method: "post",
					headers: {
						"Content-Type": "application/x-www-form-urlencoded"
					},
					body: JSON.stringify({want:"cart"})
				}
	}
}

payloads['search'] = (arg) => {
	return {
		where: `${api_dir}/get_something.php`,
		params: {
					method: "post",
					headers: {
						"Content-Type": "application/x-www-form-urlencoded"
					},
					body: JSON.stringify({want:"search",filter: arg})
				}
	}
}

payloads['wishlist'] = (arg) => {
	return {
		where: `${api_dir}/get_something.php`,
		params: {
					method: "post",
					headers: {
						"Content-Type": "application/x-www-form-urlencoded"
					},
					body: JSON.stringify({want:"wishlist"})
				}
	}
}