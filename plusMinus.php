<!-- 
	PROBLEM: https://www.hackerrank.com/challenges/plus-minus/problem
 -->

<?php 

	function plusMinus($arr) {
		$pos = 0;
		$neg = 0;
		$zer = 0;
		for($i = 0; $i < count($arr); $i++) {
			if($arr[$i] == 0) {
				$zer += 1;
			}
			elseif($arr[$i] > 0) {
				$pos += 1;
			} else {
				$neg += 1;
			}
		}
		$newPos = round($pos/count($arr), 6);
		var_dump($newPos);
		// echo $pos/count($arr), $neg, $zer;
	}

	print_r(plusMinus([-4, 3, -9, 0, 4, 1]));