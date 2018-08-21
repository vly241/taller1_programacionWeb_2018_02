<?php

$n1 = 10;
$n2 = 47;
$n3 = 45;

If($n1 <= $n2 && $n1<=$n3){
    If($n2 <= $n3){
echo 'el orden es ' . $n3. ", " . $n2 .", " . $n1;
} else {
echo 'el orden es ' . $n2 .", " . $n3 .", " . $n1;
}
} 
If($n2 <= $n1 && $n2 <= $n3){
         If($n1 <= $n3){
     echo 'el orden es ' . $n3 .", " . $n1 .", " . $n2;
}      else {
     echo 'el orden es ' . $n1 .", " . $n3 .", " . $n2;
}
}
If($n3 <= $n1 && $n3 <= $n2){
         If($n1 <= $n2){
     echo 'el orden es ' . $n2 .", " . $n1 .", " . $n3;
}      else {
     echo 'el orden es ' . $n1 .", " . $n2 .", " . $n3;
}
}



?>