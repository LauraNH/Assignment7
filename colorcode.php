<?php

//Få fram knappen för att sen få igång en funktion för den när man väl ska klicka, också settings.
@require_once('settings.php');
@require_once('button.php');

//Här under ska jag ha en funktion som gör att när jag klickar knappen går ett blocket för färgerna igång

getElementById('button'):onclick {
	

//Här försöker jag få fram färgerna genom getElementById, sen har jag numrerat dom i php
	echo {
		$colors = range(1, 3) {
		1 => getElementById('a'),
		2 => getElementById('b'),
		3 => getElementById('c')
		};
		shuffle($colors);
		foreach ($colors as $color) {
			echo "$color ";
		}
		
	}
}


//Vad jag vill ska hända är att efter en färg i förra funktionen valts, klcikar man på knappen igen, 
//så nästa färg kommer, men informationen stannar kvar från förra klicket, med $_POST

if(isset($_POST['$color']));
	
//Här har jag laddat upp färgerna
	
@require_once('7a_index.php');
@require_once('7b_index.php');
@require_once('7c_index.php');


?>
