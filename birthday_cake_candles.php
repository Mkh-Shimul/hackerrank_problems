<!-- 

PROBLEM: https://www.hackerrank.com/challenges/birthday-cake-candles/problem

 -->

<?php

function birthdayCakeCandles($ar) {
    $store = 0;
    $count = 0;

    for($i = 0; $i < count($ar); $i++) {
        if($store < $ar[$i]) {
            $store = $ar[$i];
        }
    }
    for($j = 0; $j < count($ar); $j++) {
        if($store == $ar[$j]) {
            $count += 1;
        }
    }

    return $count;

}

// TEST CASES
birthdayCakeCandles([3, 1, 2, 3]); // 2