<?php
    
    $ordenado = "Digite dois valores!";
    
    if(isset($_GET['valor'])){
        
        $ordena = $_GET['valor'];
        
        sort($ordena);
        
        $ordenado = implode(" ", $ordena);
        
    
       
    }
?>

<form>
    <input type="text" name="valor[]">
    <input type="text" name="valor[]">
    
    <input type="submit" value="Enviar">
</form>

<?= $ordenado ?>