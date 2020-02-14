<!-- 
	PROBLEM:  https://www.hackerrank.com/challenges/compare-the-triplets/problem
-->


<?php

	function compateTriplets($a, $b) {
		$aScore = 0;
    	$bScore = 0;
    	for($i = 0; $i < 3; $i++) {
        	if($a[$i] > $b[$i]){
            	$aScore += 1;
        	} elseif($a[$i] < $b[$i]) {
        		$bScore += 1;
        	}
    	}
    	return [$aScore, $bScore];
	}

	// TEST CASES
	print_r(compateTriplets([5, 6, 7], [3, 6, 10]));
	print_r(compateTriplets([17, 28, 30], [99, 16, 8]));

