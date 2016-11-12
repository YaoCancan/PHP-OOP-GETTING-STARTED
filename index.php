<?php
/**
 * recursionPrint
 * 什么
 */
function index($n){
    if ($n > 0) {
        return $n * index($n - 1);
    }else{
        return 1;
    }
}
echo index(5);