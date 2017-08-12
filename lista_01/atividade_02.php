<?php

$resposta = "Digite um numero!";

if (isset($_GET['value'])) {
    $valor = $_GET['value'];

    if ($valor > 0) {
        $resposta = 'Valor Positivo(+)';
    } else if ($valor < 0) {
        $resposta = 'Valor Negativo(-)';
    } else {
        $resposta = 'O valor igual a zero(0)';
    }
}
?>

<form>
    <input type="number" name="value" id="valor">

    <input type="submit" value="Enviar">
</form>

<?= $resposta ?>