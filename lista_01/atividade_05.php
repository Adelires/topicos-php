<?php

$nota1 = 5;
$nota2 = 10;
$nota3 = 8;
$nota4 = 3;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4.0;

if ($media > 7.0) {
    echo ' Passado';
} else if ($media > 5 && $media < 7) {
    echo 'Recuperação';
} else {
    echo 'Reprovado';
}