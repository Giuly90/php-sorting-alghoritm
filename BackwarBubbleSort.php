<?php

$array = [100, 800, 671, 5, 8];

for ($i = 0; $i < count($array); $i++) {

    if ($i == 0) {

        continue;
    }

    for ($ii = $i; $ii != 0; $ii--) {

        if ($array[$ii] < $array[$ii - 1]) {

            $containerTempC = $array[$ii]; 
            
            $containerTempD = $array[$ii - 1];
            
            $array[$ii] =  $containerTempD;

            $array[$ii - 1] = $containerTempC;
        
        }
    }

    var_dump($array);
}