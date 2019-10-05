<?php

 $dado = $_POST['nome'] . ',' . $_POST['pais'] . ',' . $_POST['time'] . ',' . $_POST['sexo'] . ',' . $_POST['idade'] . "\n";

    $handle = fopen('jogadores.csv', 'a');
    fwrite($handle, $dado); 
    header("location:jogadoresCadastrados.php");
?>