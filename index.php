<?php
echo 'NINJA DICE<br/><br/>';

// Attack
$a_dice1 = rand(1, 6);
$a_dice2 = rand(1, 6);
$a_dice3 = rand(1, 6);

echo "<div id=attacker style='border: 1px solid #999;'><br/>Attacker <br/><br/>";

echo 'Dice 1 : '.$a_dice1.'<br/>';
echo 'Dice 2 : '.$a_dice2.'<br/>';
echo 'Dice 3 : '.$a_dice3.'';

$a_dicetotal = $a_dice1 + $a_dice2 + $a_dice3;

echo '<br/> Total: '.$a_dicetotal.'<br/>';
	// Define Attack moves
	//
	if (($a_dicetotal == 3) || ($a_dicetotal == 18)){
		// Best attack
		$attack = 'Turbo Wave';
		$attack_log = 5;
	}
	if (($a_dicetotal == 7) || ($a_dicetotal == 16)){
		// 2nd best attack
		$attack = 'Power Strike';
		$attack_log = 4;
	}
	if (($a_dicetotal == 6) || ($a_dicetotal == 12) || ($a_dicetotal == 14) || ($a_dicetotal == 17)){
		// 3nd best attack
		$attack = 'Thrust';
		$attack_log = 3;
	}
	if (($a_dicetotal == 4) || ($a_dicetotal == 9) || ($a_dicetotal == 13) || ($a_dicetotal == 15)){
		// 3rd best attack
		$attack = 'Slash';
		$attack_log = 2;
	}
	if (($a_dicetotal == 5) || ($a_dicetotal == 8) || ($a_dicetotal == 10) || ($a_dicetotal == 11)){
		// 3rd Best attack
		$attack = 'Overhead attack';
		$attack_log = 1;
	}
//	echo '<br/><br/>'.$attack.'<br/><br/>';
	echo '<br/><br/>Attack name : '.$attack.'<br/>';
	echo '<br/>Attack POWER : '.$attack_log.'<br/>';
	
?></div><?php
 
// DEF
$d_dice1 = rand(1, 6);
$d_dice2 = rand(1, 6);
$d_dice3 = rand(1, 6);

echo "<div id=defender style='border: 1px solid #999;'><br/><br/>Defender <br/><br/>";

echo 'Dice 1 : '.$d_dice1.'<br/>';
echo 'Dice 2 : '.$d_dice2.'<br/>';
echo 'Dice 3 : '.$d_dice3.'';

$d_dicetotal = $d_dice1 + $d_dice2 + $d_dice3;

echo '<br/> Total: '.$d_dicetotal.'<br/>';

	// Define Defensive moves
	
	if (($d_dicetotal == 3) || ($d_dicetotal == 18)){
		// Best defense
		$defense = 'Ultimate block';
		$def_log = 5;
	}
	if (($d_dicetotal == 7) || ($d_dicetotal == 16)){
		// 2nd best defense
		$defense = 'Power block';
		$def_log = 4;
	}
	if (($d_dicetotal == 6) || ($d_dicetotal == 12) || ($d_dicetotal == 14) || ($d_dicetotal == 17)){
		// 3nd best defense
		$defense = 'Parry';
		$def_log = 3;
	}
	if (($d_dicetotal == 4) || ($d_dicetotal == 9) || ($d_dicetotal == 13) || ($d_dicetotal == 15)){
		// 3rd best defense
		$defense = 'Dodge';
		$def_log = 2;
	}
	if (($d_dicetotal == 5) || ($d_dicetotal == 8) || ($d_dicetotal == 10) || ($d_dicetotal == 11)){
		// 3rd Best defense
		$defense = 'Jump';
		$def_log = 1;
	}
//	echo '<br/>'.$defense.'<br/><br/>';
	echo '<br/>Defense name : '.$defense.'<br/>';
	echo '<br/>Defense POWER : '.$def_log.'<br/><br/>';

?></div><?php

$turn_result = $attack_log - $def_log;
// echo $turn_result;

if ($turn_result > 0 ) {
	echo '<br/> Round winner : Attacker <br/>';
} 
if ($turn_result <= 0 ) {
	echo '<br/> Round winner : Defender <br/>';
}

/*
for ($i=1; $i < 3 ; $i++) { 
	$dice1 = rand(1, 6);
	$dice2 = rand(1, 6);
	$dice3 = rand(1, 6);
	?><p>Player <?php echo $i;?> </p><?

	echo "Player : ".$i."<br/>";
	
	echo 'Dice 1 : '.$dice1.'<br/>';
	echo 'Dice 2 : '.$dice2.'<br/>';
	echo 'Dice 3 : '.$dice3.'';

	$dicetotal = $dice1 + $dice2 + $dice3;

	echo '<br/><br/> Dice total : '.$dicetotal.'<br/><br/>';
	
	// make sure there is a var
	// $attack = 3;
	
	// Test var : dev 
	// $dicetotal = 3;
	
	if ($i == 1) {
		// Define Attack moves
		
		
		$attack = "attack_".$i;
		$attack_log = "attack_log_".$i;
		
		
		//
		if (($dicetotal == 3) || ($dicetotal == 18)){
			// Best attack
			$attack = 'Turbo Wave';
			$attack_log = 5;
		}
		if (($dicetotal == 7) || ($dicetotal == 16)){
			// 2nd best attack
			$attack = 'Power Strike';
			$attack_log = 4;
		}
		if (($dicetotal == 6) || ($dicetotal == 12) || ($dicetotal == 14) || ($dicetotal == 17)){
			// 3nd best attack
			$attack = 'Thrust';
			$attack_log = 3;
		}
		if (($dicetotal == 4) || ($dicetotal == 9) || ($dicetotal == 13) || ($dicetotal == 15)){
			// 3rd best attack
			$attack = 'Slash';
			$attack_log = 2;
		}
		if (($dicetotal == 5) || ($dicetotal == 8) || ($dicetotal == 10) || ($dicetotal == 11)){
			// 3rd Best attack
			$attack = 'Overhead attack';
			$attack_log = 1;
		}
		echo '<br/><br/>'.$attack.'<br/><br/>';
		echo '<br/><br/>POWER : '.$attack_log.'<br/><br/>';
	}

	if ($i == 2) {
	// Define Defensive moves
	$defense = "defense_".$i;
	$def_log = "def_log_".$i;
	//
		if (($dicetotal == 3) || ($dicetotal == 18)){
			// Best defense
			$defense = 'Ultimate block';
			$def_log = 5;
		}
		if (($dicetotal == 7) || ($dicetotal == 16)){
			// 2nd best defense
			$defense = 'Power block';
			$def_log = 4;
		}
		if (($dicetotal == 6) || ($dicetotal == 12) || ($dicetotal == 14) || ($dicetotal == 17)){
			// 3nd best defense
			$defense = 'Parry';
			$def_log = 3;
		}
		if (($dicetotal == 4) || ($dicetotal == 9) || ($dicetotal == 13) || ($dicetotal == 15)){
			// 3rd best defense
			$attack = 'Dodge';
			$def_log = 2;
		}
		if (($dicetotal == 5) || ($dicetotal == 8) || ($dicetotal == 10) || ($dicetotal == 11)){
			// 3rd Best defense
			$defense = 'Jump';
			$def_log = 1;
		}
		echo '<br/><br/>'.$defense.'<br/><br/>';
		echo '<br/><br/>POWER : '.$def_log.'<br/><br/>';
		
	}
	
	echo $attck_log;
	echo $def_log;
	
	if ($attck_log > $def_log ) {
		echo '<br/> Round winner player 1 <br/>';
	} else {
		echo '<br/> Round winner player 2 <br/>';
	}
	
}
*/





/*
$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
$dice3 = rand(1, 6);

echo 'Dice 1 : '.$dice1.'<br/>';
echo 'Dice 2 : '.$dice2.'<br/>';
echo 'Dice 3 : '.$dice3.'';

$dicetotal = $dice1 + $dice2 + $dice3;

echo '<br/><br/> Total attack power : '.$dicetotal.'<br/>';
*/

?>