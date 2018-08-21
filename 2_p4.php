<?php

$n=0;
$a=0;

while($n<=50){
if($n % 2 == 0){

}else{
$a = $n + $a;
}
$n++;
}

echo 'La suma de los impares es '.$a;

?>