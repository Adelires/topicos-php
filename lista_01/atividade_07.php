<?php

$tamanho = 1.70;
$sexo = 'G';

if ($sexo == 'F') {
    $imc = (72.7 * $tamanho) - 58;
    
    echo 'F ='.' ' . $imc;
    
} else if ($sexo == 'M') {
    $imc = (62.1 * $tamanho) - 44;
    
    echo 'M =' . ' '  . $imc;
    
} else {
    echo 'Sexo indefinido!';
}

