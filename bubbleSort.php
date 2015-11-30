<?php

$array = [9,8,7,6,5,4,3,2,1];

for ($ii = 0; $ii < count($array); $ii++) {

    for ($i = 0; $i < (count($array) - 1); $i++) {

        if ($array[$i] > $array[$i + 1]) {

            $containerTempA = $array[$i];

            $containerTempB = $array[$i + 1];

            $array[$i] =  $containerTempB;

            $array[$i + 1] = $containerTempA;
        }
    }

    var_dump($array);
}

var_dump($array);

?>