<?php
    function syllv($genre,$age) {
      if ($genre =='homme' && $age>=18) {
        return ('Vous êtes un homme et vous êtes majeur.');
      }
      elseif ($genre =='homme' && $age<18) {
        return ('Vous êtes un homme et vous êtes mineur.');
      }
      elseif ($genre =='femme' && $age>=18) {
        return ('Vous êtes une femme et vous êtes majeur.');
      }
      else {
        return ('Vous êtes une femme et vous êtes mineur.');
      }
    }
    echo syllv("femme",15);
 ?>
