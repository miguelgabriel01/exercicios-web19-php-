<?php
$tabela = $_GET['id'];//pega os  dados via get(URL)
$arquivo = file('amigos.csv');//lê todo o arquivo

unset($arquivo[$tabela]);//apaga uma linha da tabela;

$dado = "";

foreach($arquivo as $key){
$dado = $dado . $key;

}

$abri = fopen('amigos.csv',"w");
fwrite($abri,$dado);

header("location:index.php");
?>