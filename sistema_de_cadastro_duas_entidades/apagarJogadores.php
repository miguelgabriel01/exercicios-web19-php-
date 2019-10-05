<?php
	$arq = file('jogadoresCadastrados.csv');
	$id = $_GET['id'];
	unset($arq[$id]);
	file_put_contents('jogadores.csv', implode('', $arq));
	header('location: jogadoresCadastrados.php?ta_deletado');
?>