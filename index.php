<?php

if (!is_numeric($_REQUEST['card'])){

echo "nWelcome to the kiva cardgame generator <br>";
echo " Visit ?card=number to see a specific card";

} else {

// read full CSV (? file_get_contents, str_getcsv? ... nope on on 5.3 yet)
$cards = array();
$file = fopen('cards.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  //$line is an array of the csv elements
//  $cards[] = explode(',',$line);
$cards[] = $line;
}
fclose($file);


//echo "<pre>";
//print_r($cards[$_REQUEST['card']]);
$card =($cards[$_REQUEST['card']]);

list($name, $type, $effect, $cost, $image, $flavor, $cash_v, $borrower_v, $talent_v) = $card;


echo "<html><title>$name </title>
     <link rel='stylesheet' type='text/css' href='card.css' />";

require( "types/$type".'.php');



// load images

}

