<?php

function fibonacci($n){
    $f = [];
    // $countByIndex ?? $n = $n - 1;
    for( $i = 0; $i < $n; $i++ ) {    
        if( $i < 2){        
            $f[] = $i;
        } else {
            $f[] = $f[$i-1] + $f[$i-2];
        }    
    }
    return $f;
}

// echo (join( " ", fibonacci(12)));

function fibonacciToValue($n){
    $f = [1,2];
    $i = 1;
    while( $f[count($f)-1] < $n ) {
        $i++;
        $f[] = $f[$i-1] + $f[$i-2];
    }
    return $f;
}

?>


