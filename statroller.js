//Stat Roller concept for DnD character sheet maker
//Made by Nathaniel Staddler
var rollStats = function() {
	var rolls = [
		[0, 0, 0, 0], 
		[0, 0, 0, 0], 
		[0, 0, 0, 0], 
		[0, 0, 0, 0], 
		[0, 0, 0, 0], 
		[0, 0, 0, 0]
	];
	var stats = [0, 0, 0, 0, 0, 0];
	var html_stuff = "<p>Stats obtained by rolling 4d6, dropping the lowest (crossed out) number, and adding the rest together.</p><ul style='list-style:none'>";
	for (var i = 0; i < stats.length; i++) {

		for (var j = 0; j < 4; j++) {
			rolls[i][j] = Math.floor(Math.random() * 6) + 1;
		}

		var min_index = 0;
		for (var j = 0; j < 4; j++) {
			if (rolls[i][j] < rolls[i][min_index]) {
				min_index = j;
			}
		}

		html_stuff += "<li>";
		for (var j = 0; j < 4; j++) {
			if (j == min_index) {
				html_stuff += "<s>" + rolls[i][j] + "</s>";
			}
			else {
				stats[i] += rolls[i][j];
				html_stuff += rolls[i][j];
			}
			if (j < 3) {
				 html_stuff += " + ";
			}
		}
		html_stuff += " = <strong>" + stats[i] + "</strong>";
		html_stuff += "</li>";
	}
	html_stuff += "</ul>"
	document.getElementById("rolledstats").innerHTML = html_stuff;
}

var standardArray = function() {
	var stats = [15, 14, 13, 12, 10, 8];
	var html_stuff = "<p>This is the Standard Array as denoted by the player handbook</p><ul style='list-style:none'>";
	for (var i = 0; i < stats.length; i++) {
		html_stuff += "<li>";
		html_stuff += "<strong>" + stats[i] + "</strong>";
		html_stuff += "</li>";
	}
	html_stuff += "</ul>"
	document.getElementById("rolledstats").innerHTML = html_stuff;
}

document.getElementById('rollstats').onclick = rollStats;
document.getElementById('sarray').onclick = standardArray;