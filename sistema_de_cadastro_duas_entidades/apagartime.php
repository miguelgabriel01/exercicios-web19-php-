<?php
$tabela = $_GET['id'];//pega os  dados via get(URL)
$arquivo = file('times.csv');//lê todo o arquivo

unset($arquivo[$tabela]);//apaga uma linha da tabela;

$dado = "";

foreach($arquivo as $key){
$dado = $dado . $key;

}

$abri = fopen('times.csv',"w");
fwrite($abri,$dado);

header("location:TimesCadastrados.php");
?>