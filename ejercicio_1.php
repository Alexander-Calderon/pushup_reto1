<?php

require 'fibonacci.php';

function ejercicio_1($n)
{
    echo fibonacci($n+1)[$n];
}
echo "Ingrese n: ";
$input = fgets(STDIN);
ejercicio_1((int)$input);