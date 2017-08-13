<?php

require 'Celular.php';

$iphone = new Celular("iphone","apple",5,8,2, 2.000);

$galaxyS7 = new Celular("Galaxy S7","samsung",5,8,2, 2.000);

$motoX = new Celular("Moto X","motorola",5,8,2, 2.000);


echo "<h2> Exercicio Celular </h2>";

$iphone->mostraDados();
echo '</br>';
$galaxyS7->mostraDados();
echo '</br>';
$motoX->mostraDados();