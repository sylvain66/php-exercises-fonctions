<?php
    function syllv($i,$p){
      if ($i>$p) {
        return ('Le premier nombre est plus grand');
      }
      elseif ($i<$p) {
        return('Le premier nombre est plus petit');
      }
      else {
        return('Les deux nombres sont identiques');
      }
    }
    echo syllv(10,10);

 ?>
