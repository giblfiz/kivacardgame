<?php
    error_log("hello world errorlog");

if (!is_numeric($_REQUEST['card'])){

echo "nWelcome to the kiva cardgame generator <br>";
echo " Visit ?card=number to see a specific card";

#add a "card detected count"
# add an "image check" service


} else {

# read full CSV (? file_get_contents, str_getcsv? ... nope on on 5.3 yet)
$cards = array();
$file = fopen('cards.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  //$line is an array of the csv elements
//  $cards[] = explode(',',$line);
$cards[] = $line;
}
fclose($file);

error_log(print_r($cards, true));

#echo "<pre>";
error_log(print_r($cards[$_REQUEST['card']], true));
$card =($cards[$_REQUEST['card']]);

list($name, $type, $effect, $cost, $image, $flavor, $cash_v, $borrower_v, $talent_v) = $card;

$card_name_size = (strlen($name) > 16 )? "card_name_long" : "card_name_short";
$card_flavor_size = (strlen($flavor) > 120 )? "card_flavor_long" : "card_flavor_short";
$card_rule_size = (strlen($effect) > 20 )? "card_rule_long" : "card_rule_short";

echo "<html><title>$name </title>
     <link rel='stylesheet' type='text/css' href='card.css' />";

if ($type == 'S' or $type == 'P' or $type == 'I' or $type == 'X')
require( "types/P".'.php');



// load images

}


function iconify($string){
    $sm = '<div class="multiIcon"></div>';
    $smh = '<div class="multiIconHalf"></div>';

    $ts = '<img src="/kivacardgame/icons/Talent.svg" class="singleIcon">';
    $tm = '<img src="/kivacardgame/icons/Talent.svg" class="multiIcon">';
    $tt = '<img src="/kivacardgame/icons/Talent.svg" class="tinyIcon">';

    $bs = '<img src="/kivacardgame/icons/Borrower.svg" class="singleIcon">';
    $bm = '<img src="/kivacardgame/icons/Borrower.svg" class="multiIcon">';
    $bt = '<img src="/kivacardgame/icons/Borrower.svg" class="tinyIcon">';

    $ms = '<img src="/kivacardgame/icons/Money.svg" class="singleIcon">';
    $mm = '<img src="/kivacardgame/icons/Money.svg" class="multiIcon">';
    $mt = '<img src="/kivacardgame/icons/Money.svg" class="tinyIcon">';

    $ls = '<img src="/kivacardgame/icons/Lender.png" class="singleIcon">';
    $nls = '<img src="/kivacardgame/icons/NewLender.png" class="singleIcon">';
	 switch(trim($string)){

	 case "0L":
	 case "0T":
	 case "0B":
	 case "$0":
	 return(0);

	 case "1T":
	     return($ts);
	 case "2T":
	     return($tm.$sm.$sm.$tm);
	 case "3T":
	     return($tm.$tm.$smh.$tm);
	 case "4T":
	     return($tm.$tm.$tm.$tm);
	 case "5T":
	     return($tt.$tt.$tt.$tt.$tt);
	 case "6T":
	     return($tt.$tt.$tt.$tt.$tt.$tt);
	 case "7T":
	     return($tt.$tt.$tt.$tt.$tt.$tt.$tt);
	 case "8T":
	     return($tt.$tt.$tt.$tt.$tt.$tt.$smh.$tt.$tt);


	 case "1B":
	     return($bs);
	 case "2B":
	     return($bm.$sm. $sm. $bm);
	 case "3B":
	     return($bm.$bm.$smh.$bm);
	 case "4B":
	     return($bm.$bm.$bm.$bm);
	 case "5B":
	     return($bt.$bt.$bt.$bt.$bt);
	 case "6B":
	     return($bt.$bt.$bt.$bt.$bt.$bt);

	 case '$1':
	     return($ms);
	 case '$2':
	     return($mm. $sm. $sm.$mm);
	 case '$3':
	     return($mm.$mm.$smh.$mm);
	 case '$4':
	     return($mm.$mm.$mm.$mm);
	 case '$5':
	     return($mt.$mt.$mt.$mt.$mt);
	 case '$6':
	     return($mt.$mt.$mt.$mt.$mt.$mt);


	 case '1L':
	     return($ls);
	 case '2L':
	     return($ls.$ls);
	 case '3L':
	     return($ls.$ls.$ls);

	 case '1NL':
	     return($nls);
	 case '2NL':
	     return($nls. $nls);
	 case '5NL':
	     return($nls.$nls.$nls.$nls.$nls);

	 }

return($string);
}

function typer($type){
$types = array(
    "S" =>"Favor"
    ,"X" => "Problem"
    ,"P" => "Asset"
    ,"I" => "Event"
    );
return($types[$type]);

}
