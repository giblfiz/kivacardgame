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

echo "<html><title>$name </title>
     <link rel='stylesheet' type='text/css' href='card.css' />";

require( "types/$type".'.php');



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
	 switch(trim($string)){
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

	 }

return($string);
}
