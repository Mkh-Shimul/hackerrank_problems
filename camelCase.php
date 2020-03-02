<!-- 
PROBLEM: https://www.hackerrank.com/challenges/camelcase/problem
 -->

<?php


    function camelcase($s) {
        $newstr = strtoupper($s);
        $count = 1;
        for($i = 0; $i < strlen($newstr); $i++) {
            if($newstr[$i] === $s[$i]) {
                $count++;
            }
        }
        return $count;
    }

    // TEST CASES: 
    camelcase('saveChangesInTheEditor');
    camelcase('oneTwoThree');