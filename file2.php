<?php

$x = array(0,8,5,4 ,2 );
$y = array(2,6,4 ,1 );
$z = array(4,5,7,2);
for ($i=0; $i < count($x) ; $i++) {
  $cf = $x[$i] ;
    for ($j=0; $j <count($y) ; $j++) {

      for ($q=0; $q < count($z) ; $q++) {
        if($cf == $y[$j] && $cf == $z[$q])
        {echo "comon factor = " . $cf;}

      }
    }
}

 ?>
