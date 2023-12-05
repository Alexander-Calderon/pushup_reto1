<?php

require 'fibonacci.php';

function ejercicio_3($n){
    echo join(" ", fibonacci($n));
}
echo "Ingrese un número: ";
$input = fgets(STDIN);
ejercicio_3((int)$input);
