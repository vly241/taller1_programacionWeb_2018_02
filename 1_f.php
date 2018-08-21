

<?php
$num = 5;

   if($num % 2 == 0){
       
       $potencia= pow($num, 2);
       
       echo "el numero ",$num," es par y ";
       
       echo "la elevacion al cuadrado de  ",$num," es ",$potencia;
   }else{
       
        $potencia= pow($num, 3);
       
        echo "el numero ",$num," es impar ";
       
       echo " y la elevacion al cubo de  ",$num," es ",$potencia;
   }

?>
