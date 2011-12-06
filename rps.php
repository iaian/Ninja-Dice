<?php

$player = rand(1, 3);
$computer = rand(1, 3);

/*
1 = rock
2 = paper
3 = Scissor 
*/

echo 'Player: '.$player.'<br/>';
echo 'Computer: '.$computer.'<br/>';


if (($player == 1) && ($computer == 1)) {
	echo 'Draw';
}
if (($player == 1) && ($computer == 2)) {
	echo 'Lose';
}
if (($player == 1) && ($computer == 3)) {
	echo 'Win';
}

if (($player == 2) && ($computer == 1)) {
	echo 'Win';
}
if (($player == 2) && ($computer == 2)) {
	echo 'Draw';
}
if (($player == 2) && ($computer == 3)) {
	echo 'Lose';
}

if (($player == 3) && ($computer == 1)) {
	echo 'lose';
}
if (($player == 3) && ($computer == 2)) {
	echo 'Win';
}
if (($player == 3) && ($computer == 3)) {
	echo 'Draw';
}

/*
echo $hand_1;
echo $hand_2;
*/

?>