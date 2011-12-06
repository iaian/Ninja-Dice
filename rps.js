$(document).ready(function(){
// Your code here
	
	// Generates a radom number 0 - 2 
	var player=Math.floor(Math.random()*3);
	var computer=Math.floor(Math.random()*3);
	
	/*
	0 = rock
	1 = paper
	2 = Scissor 	
	*/
	
	// Gota be a better way to do this..
	if (player == 0) {playerweapon = 'Rock';};
	if (player == 1) {playerweapon = 'Paper';};
	if (player == 2) {playerweapon = 'Scissor';};

	if (computer == 0) {compweapon = 'Rock';};
	if (computer == 1) {compweapon = 'Paper';};
	if (computer == 2) {compweapon = 'Scissor';};
	
	
	document.write("Player : " + player + "&nbsp;&nbsp;" + playerweapon + "<br/>");
	document.write("Computer : " + computer + "&nbsp;&nbsp;" + compweapon + "<br/>");
	document.write("<br/><br/>");
	
	if ((player == 0) && (computer == 0)) {
		document.write("Draw");	
	};
	if ((player == 0) && (computer == 1)) {
		document.write("Lose");	
	};
	if ((player == 0) && (computer == 2)) {
		document.write("Win");	
	};
	
	if ((player == 1) && (computer == 0)) {
		document.write("Win");	
	};
	if ((player == 1) && (computer == 1)) {
		document.write("Draw");	
	};
	if ((player == 1) && (computer == 2)) {
		document.write("Lose");	
	};
	
	if ((player == 2) && (computer == 0)) {
		document.write("Lose");	
	};
	if ((player == 2) && (computer == 1)) {
		document.write("Win");	
	};
	if ((player == 2) && (computer == 2)) {
		document.write("Draw");	
	};


});