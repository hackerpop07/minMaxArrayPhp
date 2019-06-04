<?php
$array = [[4, 5], [4, 643], [32, 3], [23, 1, 3, 4], [32, -12, 233], [-23, 12, 3]];
$max = $array[0][0];
for ($i=0;$i<count($array);$i++) {
    for ($j=0;$j<count($array[$i]);$j++) {
        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
        }
    }
}
var_dump($array);
echo "<br>", "Max: ", $max;
?>
