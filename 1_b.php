<?php
     
$num = 19;
$cd=0;


    for($i=1; $i<($num+1); $i++){
        if($num % $i == 0){
             $cd ++;
        }
    }
    
    if($cd == 2){
        echo "el numero ",$num," es primo";
    }else{
         echo "el numero ",$num," no es primo";
    }

?>




