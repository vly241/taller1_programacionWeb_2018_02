<?php

$a=0;
$b=0;
$c=100;

while($b<=$c){
	$b++;

	if($b<$c){
	echo $b.'+';
	}

	else{
	echo '';
	}

	$a+=$b;

	if($b==$c){
	echo '='.$a;
	}
}

?>