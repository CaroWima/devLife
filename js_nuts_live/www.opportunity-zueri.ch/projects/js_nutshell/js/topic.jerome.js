// Funktionen für "Wieviele Tage hat dieser Monat?"

function totalDays() {

	var month = document.getElementById('Month').value
	var year = document.getElementById('Year').value
	var dayCount = 12;
	
	switch (month) { 
		
	case "1": case "3": case "5": case "7": case "8": case "10": case "12": 
		dayCount = 31;
		break;

	case "4": case "6": case "9": case "11": 
		dayCount = 30;
		break;

	case "2": 	
		if (year % 4 == 0) 
			dayCount = 29;
			else dayCount = 28;
		break;
	default:
		dayCount = "Error"; 	
		console.log(month);
		break;
	}
	
	document.getElementById('output').innerHTML = "Der ausgewählte Monat hat "+dayCount+" Tage";
}


function reset() {
	document.getElementById('output').innerHTML = "";
}

// Funktionen für "BMI Berechnung / IF / ELSEIF / ELSE"

function BMI() {
	var gewicht = parseFloat(document.getElementById('Gewicht').value)
	var grösse = document.getElementById('Grösse').value

	let bmi = gewicht / (grösse*grösse)

	if (grösse < 20 || gewicht > 250 || grösse < 0.7 || grösse > 2.5) {
		document.getElementById('output').innerHTML = "Bitte geben Sie realistische Werte ein! :)";
	} else {
		if (bmi < 18.5){
			document.getElementById('output').innerHTML = "Sie sind Untergewichtig!";
		}
		else if (bmi >= 18.5 && bmi < 24.9) {
			document.getElementById('output').innerHTML = "Sie haben ein Normalgewicht";
		}
		else {
			document.getElementById('output').innerHTML = "Sie haben Übergewicht!";
		}
	}

}

function resetbmi() {
	document.getElementById('outputbmi').innerHTML = "";
}

