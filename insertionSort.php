<?php

$array = [9,8,7,6,5,4,3,2,1];

for ($i = 0; $i < count($array) - 1; $i++ ) {

echo $i . "\n";

var_dump($array);

    if ($array[$i] > $array[$i + 1]) {

        $conA = $array[$i];

        $conB = $array[$i + 1];

        $array[$i] = $conB;

        $array[$i + 1] = $conA;

        var_dump($array);

        if ($i == 0) {

            continue;
        
        } else {

            $ii = $i;

            for ($ii; $ii >= 1; $ii--) {

                if ($array[$ii] < $array[$ii - 1]) {

                    $conC = $array[$ii];

                    $conD = $array[$ii - 1];

                    $array[$ii] = $conD;

                    $array[$ii - 1] = $conC;
                
                } 

                var_dump($array);
            }
        } 
    }
}

var_dump($array);