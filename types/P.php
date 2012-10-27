<div class="<?echo $type . '_card'?> global">
     <div class="card_name <?php echo "$card_name_size $type"?>">
       <div class="hint"><?echo typer($type) ?></div>
       <? echo $name ?>
     </div>
     <div class="cost">
       <div class="big_icon <?echo $cost ?>"><? echo iconify($cost) ?></div>
     </div>

     <div class="effect  <?echo "$card_rule_size $type".'_effect'?>">
       <div class="floater"></div>
       <div><? echo iconify($effect) ?></div>
     </div>

     <img class="main_image" src="/kivacardgame/images/<? echo $image ?>" />

     <div class="flavor">
       <span class="flavor_text <?echo $card_flavor_size?>"><? echo $flavor ?></span>
     </div>

     <div class="values">
       <div class="flip big_icon value <? echo $cash_v ?>">
	 <? echo iconify('$'.$cash_v) ?>
       </div>
       <div class="flip big_icon value <? echo $borrower_v ?>">
	 <? echo iconify($borrower_v."B") ?>
       </div>
       <div class="flip big_icon value <? echo $talent_v ?>">
	 <? echo iconify($talent_v."T") ?>
       </div>
     </div>


</div>
