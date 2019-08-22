

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tabela php</title>
</head>
<style>
th{
	color:black;
	font-size:20px;
	border:1px solid black;
}

h2{
	
	color:darkcyan;
	font-size:35px;
	text-align:center;
}
.tabela{
	border:0.5px solid black;
	border-collapse:collapse;
	font-family:arial,sans-serif;
}
tr,td{
	
	border:1px solid green;
	text-align:center;
	padding:8px;
	font-size:17px;
	color:black;
}

tr:nth-child(even){
	background-color:darkcyan;
	
}

</style>
<body>
    
           
	<table class="tabela">
	 <h2>bandas</h2>
	
		  <tr>
			  <th>Nome</th>
			  <th>idade</th>
			  <th>cidade</th>
			</tr>
    
    
    
 <?php

$linhas = file('teste.txt');
for($i = 0; $i < sizeof($linhas); $i++){
   for($j = 0; $j < sizeof($linhas[$i]); $j++){
   	
   $linhas[$i][$j] = trim($linhas[$i][$j]);
   
}
 }

?>
<tr>
    <?php foreach ($linhas as $linha): ?>
        <td><?= $linha ?></td>
    <?php endforeach ?>
</tr>
 
 
    
    
  
</table>
</body>
</html>
