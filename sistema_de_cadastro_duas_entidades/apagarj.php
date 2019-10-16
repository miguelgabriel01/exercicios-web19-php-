<?php
	$arq = file('jogadores.csv');
	$id = $_GET['id'];
	unset($arq[$id]);
	file_put_contents('jogadores.csv', implode('', $arq));
	header('location: jogadores.php?ta_deletado');
?>