<?php

 $dado = $_POST['time'] . "\n";

    $handle = fopen('times.csv', 'a');
    fwrite($handle, $dado); 
    header("location:TimesCadastrados.php");
?>