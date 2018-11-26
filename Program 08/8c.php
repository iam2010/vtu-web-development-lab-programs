// Addition of Matrix

<?php
$mat1 = array(
    array(1, 9),
    array(3, 9)
);

$mat2 = array(
    array(4, 9),
    array(5, 9)
);

$sumArray = array();
$result = array();
for($i=0; $i<=1; $i++) {
    for($j=0; $j<=1; $j++) {
        $result[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
    }
}

echo "<h2> Result </h2>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";  
  for ($col = 0; $col < 3; $col++) {
    echo " ".$result[$row][$col];
  }
  
}
?>