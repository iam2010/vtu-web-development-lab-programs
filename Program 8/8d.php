<?php
$mat1 = array( array(1,2),array(4,5));
$mat2 = array( array(7,5),array(3,2));

$r=count($a);
$c=count($b[0]);
$p=count($b);
if(count($a[0]) != $p){
    echo "Incompatible matrices";
    exit(0);
}
$result=array();
for ($i=0; $i < $r; $i++){
    for($j=0; $j < $c; $j++){
        $result[$i][$j] = 0;
        for($k=0; $k < $p; $k++){
            $result[$i][$j] += $mat1[$i][$k] * $mat2[$k][$j];
        }
    }
}
echo "<h2> Multiplication of Matrix </h2>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";  
  for ($col = 0; $col < 3; $col++) {
    echo " ".$result[$row][$col];
  }
  
}
>?