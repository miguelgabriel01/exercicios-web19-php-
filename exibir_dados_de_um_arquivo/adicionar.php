<?php

 $dado = $_POST['nome'] . ',' . $_POST['email'] . ',' . $_POST['idade'] . ',' . $_POST['pais'] . "\n";

    $handle = fopen('tabela.csv', 'a');
    fwrite($handle, $dado); 
    header("location:miguel.php");
?>