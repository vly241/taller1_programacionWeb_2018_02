<?php
$n1= 12;
$n2 = 9;
$n3 = 11;

 if( $n1 > $n2){
     if( $n1 > $n3){
         
         echo " el numero maximo de ",$n1," , ",$n2," , ",$n3, " es ",$n1;
     }else{
         echo " el numero maximo de ",$n1," , ",$n2," , ",$n3, " es ",$n3;
     }
 }else if($n2>$n3){
        echo " el numero maximo de ",$n1," , ",$n2," , ",$n3, " es ",$n2;
 }else{
    echo " el numero maximo de ",$n1," , ",$n2," , ",$n3, " es ",$n3;
 }



echo "    otra opcion es usar MAX ";

 
$m = max($n1,$n2,$n3);
echo " el maximo es ",$m;

?>