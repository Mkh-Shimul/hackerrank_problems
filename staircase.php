<!-- 
	PROBLEM : https://www.hackerrank.com/challenges/staircase/problem
 -->

<?php 

	function staircase($n) {
	    for($i = 1; $i <= $n; $i++) {
	        for($j = 1; $j <= $n - $i; $j++) {
	            echo " ";
	        }
	        for($k = 1; $k <= $i; $k++) {
	            echo "#";
	        }
	        echo PHP_EOL;
	    }
	}

// TEST CASES:
	// input => 6
	// output =>  	#
				   ##
				  ###
				 ####
			   	#####
			   ######
