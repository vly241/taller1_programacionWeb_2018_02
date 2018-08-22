<?php

$n1=1;
 
 $n3=23;

 for($n2=1;$n2 <= $n3;$n2++){
     if($n2<=$n3){
         echo pow(2,$n2). ", ";
     }else{
         echo $n3;
     }
     $n1=pow(2,$n2);
     
     if($n2==$n3){
         echo '= '.$n1;
     }
     
 }


?>