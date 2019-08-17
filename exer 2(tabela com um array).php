

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
    
    
     <?php 
         $bandas = [
           ["system of a down","rock/alternativo","usa","chop suey","Serj tankian"],
           ["slipknot","neww metal","usa-IOWA","vermilion pt.2","Corey taylor"],
           ["AC/DC","heave metal","australia","highway to hell","brian jhonson"],
           ["QUEEN","rock","inglaterra","i want breakk free","Freddie mercury"],
           ["GUNS N' ROSES","hard rock","usa","paradise city","axl rose"],
           
         ]; ?>
	<table class="tabela">
	 <h2>bandas</h2>
	
		  <tr>
			  <th>Nome</th>
			  <th>Gênero</th>
			  <th>pais</th>
			  <th>principal musica</th>
			  <th>vocalista</th>
			</tr>
    
    
    	<?php for ($i = 0; $i < sizeof($bandas); $i++): ?>
    	  <tr>
    	   <?php for ($j = 0; $j < sizeof($bandas[$i]); $j++): ?>
	       <td><?= $bandas[$i][$j] ?></td>
	       <?php endfor ?>
	       </tr>
	    <?php endfor ?>
	 
    
  
</table>
</body>
</html>

</body>
</html>
