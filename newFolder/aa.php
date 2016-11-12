<?php





/**
 * new aa.php
 */


function recursionPrint($n) {
	if ($n>0){
		return $n * recursionPrint($n-1);
	}else{
		return 1;
	}
}

echo recursionPrint(4);
