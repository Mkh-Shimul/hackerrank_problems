<!-- 

PROBLEM: https://www.hackerrank.com/challenges/time-conversion/problem

 -->

<?php

function timeConversion($s) {
    /*
     * Write your code here.
     */
     return DATE("H:i:s", STRTOTIME($s));

}

// TEST CASES
print_r(timeConversion('07:05:45PM'));   // 19:05:45