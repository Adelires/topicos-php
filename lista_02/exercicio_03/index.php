<?php

require 'Genero.php';
require 'Filme.php';
require 'Sessao.php';
require 'Ingresso.php';

$genero = new Genero("Guerra", "livre");
$filme = new Filme("Teste Testado", $genero, "Arnaldo", "Juselino");
$sessao = new Sessao(16, 30);

$comprar = new Ingresso($filme, $sessao);

echo "<pre>";   

print_r($comprar);
