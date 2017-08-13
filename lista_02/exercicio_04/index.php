<?php

require 'Cliente.php';
require 'Telefone.php';

$cliente = new Cliente( "Maria", "11111111111", " Rua Castro Alves 384");
$telefone = new Telefone("(54) 991667587", $cliente);

echo '<pre>';

print_r($telefone);

echo '</br>';

$telefone ->fazerLigacao(30, "celular");

print_r($telefone);





