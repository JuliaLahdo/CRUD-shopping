<?php 
function reducedPrice($newPrice) {
  
        $date = date("l"); /* Picks out correct day automatically according to calendar */
        
        if($date === 'Tuesday'){
        $newPrice = $newPrice / 2; /* Takes price / 2, 50% off every Monday */
    }else if(date("l") === 'Wednesday'){
         $newPrice = $newPrice * 1.1; /* Takes price * 1,1, price is 110% every Wednesday */
    }else if(date("l") === 'Friday' && $newPrice > 200){
         $newPrice = $newPrice - 20; /* Takes prices over 200 and reduces them by 20SEK every Friday */
    }
    return $newPrice;
    }

?>