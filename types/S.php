<div class="favor_card">
     <div class="card_name <?php echo $card_name_size?>"><? echo $name ?></div>
     <div class="big_icon cost <?echo $cost ?>"><? echo $cost ?></div>

     <div class="effect">
       <div class="floater"></div>
       <div><? echo $effect ?></div>
     </div>

     <img class="main_image" src="/kivacardgame/images/<? echo $image ?>" />

     <div class="flavor">
       <? echo $flavor ?>
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
