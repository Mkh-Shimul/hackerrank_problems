<!-- 

PROBLEM : https://www.hackerrank.com/challenges/grading/problem

 -->

<?php

// Solution 01 
function gradingStudents($grades) {
    // Write your code here
    for($i = 0; $i < count($grades); $i++) {
        $b = ceil($grades[$i] / 5) * 5;
        $sub = $b-$grades[$i];
            
        if($grades[$i] < 38 || $sub > 3) {
            echo $grades[$i]."\n";
        } elseif($sub < 3 ) {
            echo $b."\n";
        } else {
            echo $grades[$i]."\n";
        }
    }
}

// Solution 02
function gradingStudents($grades) {
    // Write your code here
    for($i = 0; $i < count($grades); $i++) {
        if($grades[$i] >= 38) {
            if($grades[$i] % 5 >= 3) {
                $grades[$i] += 5 - $grades[$i] % 5; 
            }
        }
    }

    return $grades;
}

// TEST CASES
gradingStudents([73, 67, 38, 33]);