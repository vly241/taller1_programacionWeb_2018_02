<?php

$num = 180;

    if($num  == 0){
        
        echo "el numero",$num,"es nulo ";
        
        
    }else {
        if($num>0 && $num <100){
            echo "el numero ",$num, " es positivo y es menor a 100";
        }else if($num>0){
            echo "el numero ",$num, " es positivo pero mayor a 100";
        }else{
             echo "el numero ",$num, " es negativo";
        }
       
    }
       
?>