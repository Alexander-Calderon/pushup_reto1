<?php

require 'fibonacci.php';

function ejercicio_2($n){
    if ( in_array( $n , fibonacciToValue($n)  ) ){
        echo $n . ' es número de Fibonacci';
    } else {
        echo $n . ' no es número de Fibonacci';

    }
}
echo "Ingrese un número: ";
$input = fgets(STDIN);
ejercicio_2((int)$input);
