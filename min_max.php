<!-- 
    PROBLEM: hackerrank.com/challenges/mini-max-sum/problem
 -->

<?php

    function miniMaxSum($arr) {
        sort($arr);
        $max = 0;
        $min = 0;
        $size = count($arr);

        for($i = 1; $i < $size; $i++) {
            $max += $arr[$i];
        }

        for($i = 0; $i < $size - 1; $i++) {
            $min += $arr[$i];
        }

        echo $min." ".$max;
    }


    // TEST CASES: 
    miniMaxSum([1, 2, 3, 4, 5]);
    miniMaxSum([1, 3, 5, 7, 9]);