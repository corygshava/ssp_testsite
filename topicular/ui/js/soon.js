// countdown feature
let launchdate = "2025-08-31T03:00:00";
let countdowninter = undefined;

function makecountdown(holder,thedate) {
	thedate = thedate == undefined ? launchdate : thedate;

	let targetDate = new Date(thedate).getTime();

	if(holder == undefined){
		console.log("define a holder for the elements first");
		return;
	}

	let theholder = typeof(holder) == "string" ? document.querySelector(holder) : holder;

	const updateCountdown = () => {
		const now = new Date().getTime();
		const gap = targetDate - now;

		if (gap <= 0) {
			document.querySelector(".cw-countdown").innerHTML = "<h3>Countdown Complete</h3>";
			return;
		}

		const second = 1000;
		const minute = second * 60;
		const hour = minute * 60;
		const day = hour * 24;

		const days = Math.floor(gap / day);
		const hours = Math.floor((gap % day) / hour);
		const minutes = Math.floor((gap % hour) / minute);
		const seconds = Math.floor((gap % minute) / second);

		let outres = `
			<div class="smallcard">
				<div class="h2 themetxt" id="days">${days}</div>
				<div class="label">Days</div>
			</div>
			<div class="smallcard">
				<div class="h2 themetxt" id="hours">${String(hours).padStart(2, '0')}</div>
				<div class="label">Hours</div>
			</div>
			<div class="smallcard">
				<div class="h2 themetxt" id="minutes">${String(minutes).padStart(2, '0')}</div>
				<div class="label">Minutes</div>
			</div>
			<div class="smallcard">
				<div class="h2 themetxt" id="seconds">${String(seconds).padStart(2, '0')}</div>
				<div class="label">Seconds</div>
			</div>`;

		theholder.innerHTML = outres;
		document.getElementById("days").textContent = days;
		document.getElementById("hours").textContent = String(hours).padStart(2, '0');
		document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
		document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');
	};

	if(countdowninter != undefined){
		clearInterval(countdowninter);
	}

	countdowninter = setInterval(updateCountdown,1000);
}
