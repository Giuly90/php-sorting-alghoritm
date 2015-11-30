<?php

$array = [9,8,7,6,5,4,3,2,1];

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