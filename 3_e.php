<?php

$n1=1;
 $n;
 $n3=4;

 for($n2=1;$n2 <= $n3;$n2++){
     
     if($n2<=$n3){
          if($n2 % 2 == 0){
         echo $n2.'+';
     }else {
         echo $n2.'-';
     }
     
     
     }
    $n1=$n2+$n1-$n2;
         
     
     if($n2==$n3){
         echo '='.$n1;
     }
 }

?>