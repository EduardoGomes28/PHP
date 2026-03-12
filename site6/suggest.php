<?php 
// People Array @TODO - Get from DB
$People[] = "Eduardo";
$People[] = "Hugo";
$People[] = "Marco";
$People[] = "Edson";
$People[] = "Diogo Santos";
$People[] = "Etiandro";
$People[] = "Marcia";
$People[] = "Antonieta";
$People[] = "Ana";
$People[] = "Brando";
$People[] = "Kevin";
$People[] = "Chase";
$People[] = "Kenyatta";
$People[] = "Jordan";
$People[] = "LeBron";
$People[] = "MJ";
$People[] = "AJ";
$People[] = "Steph";
$People[] = "Klay";
$People[] = "Kyrie";
$People[] = "Donovan";
$People[] = "James";
$People[] = "Kawhi";

//Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

//Get Suggestions
if ($q !== "" {
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($people as $person) {
		if (stristr($q, substr($person, 0 $len))) {
			if($suggestion == ""){
				$suggestion = $person;
			} else {
				$suggestion .=", $person";
			}
		}
	}
} 
echo $suggestion ==="" ? "No suggestion": $suggestion;
 ?>