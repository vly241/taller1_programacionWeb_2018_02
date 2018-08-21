<?php

$a=1;
$b=1;
$c=4;

while($b<=$c){
	if($b<=$c){
	echo $b.'*';
	}

	else{
	echo $c;
	}

	$a = $b * $a;

	if($b==$c){
	echo '='.$a;
	}
	$b++;
}

?>