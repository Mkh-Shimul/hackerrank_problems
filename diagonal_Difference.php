<!-- 
	PROBLEM: https://www.hackerrank.com/challenges/diagonal-difference/problem
 -->

<?php 

	function DiagonalDifference($arr) {
		$firstDiag = 0;
		$lastDiag = 0;
		$sizeOfArray = count($arr);

		for($i = 0; $i < $sizeOfArray; $i++) {
			$firstDiag += $arr[$i][$i];
			$lastDiag += $arr[$i][$sizeOfArray - $i - 1];
		}

		return abs($firstDiag - $lastDiag).PHP_EOL;
	}



// TEST CASES
print_r(DiagonalDifference([[11, 2, 4], [4, 5, 6], [10, 8, -12]]));
print_r(diagonalDifference([[1, 2, 3], [4, 5, 6], [9, 8, 9]]));

