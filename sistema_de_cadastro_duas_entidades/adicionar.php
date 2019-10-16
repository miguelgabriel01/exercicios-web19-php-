<?php

 $dado = $_POST['time'];

    $handle = fopen('tabela.csv', 'a');
    fwrite($handle, $dado); 
    header("location:cadastrados.php");
?>