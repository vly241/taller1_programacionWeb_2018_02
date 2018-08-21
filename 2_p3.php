<?php

$n=0;
$a=0;

while($n<=50){

$n++;

if($n % 2 == 0){

$a = $n + $a;

}
}

echo 'La suma de los pares es '.$a;

?>