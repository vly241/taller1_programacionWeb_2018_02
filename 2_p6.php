<?php

$l=10;
$c=1;
$a=0;
$b=1;
$c=0;

echo "$a $b";

while($c<=$l){
	$c=$a + $b;
	echo "$c";
	$a=$b;
	$b=$c;
	
	$c+=1;
}
?>