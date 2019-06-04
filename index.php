<?php
$array = [4, 5, 4, 643, 32, 3, 23, 1, 3, 4, 32, -12, 233];
$min = $array[0];
foreach ($array as $value) {
    if ($value < $min) {
        $min = $value;
    }
}
var_dump($array);
echo "<br>", "Min: ", $min;
?>
