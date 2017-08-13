<?php

require 'Calculadora.php';

$teste = new Calculadora();
 
 echo "<h2> Exercicio Calculadora </h2>";
 echo "Soma = " . $teste->somar(5,10) . "</br>";
 echo "Subtração = " . $teste->subtrair(8,4) . "</br>";
 echo "Divisão = " . $teste->dividir(10,2) . "</br>";
 echo "Multiplicação" . $teste->multiplicar(2,2) . "</br>";
