<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cadrasto</title>
</head>
<style>
	body{
		background: #34495e
	}
	.prin{
		width: 420px;
		border:2px solid black;
		height: 550px;
		border-radius: 5px;
		background-color: #191919;	
		position: absolute;
		left: 450px;
		top: 400px;

	}
	

	h2{
		text-align: center;
		color: white;
		font-family: sans-serif;
		font-size: 40px;

	}

    input[type="text"]{
    	color: white;
    	font-family: sans-serif;
    	font-size: 20px;
    	border: 0.5px solid green;
        text-align: center;
        border-radius: 20px;
        position: relative;
        left: 33px;
        height: 40px;
        width: 350px;
        transition: left 1s;
        background: black;  
    }
    
      #pais,input[type="password"]{
    	color: white;
    	border:none;
    	text-decoration: none;
    	font-family: sans-serif;
    	font-size: 20px;
        background: black;
    	border: 0.5px solid green;
    	text-align: center;
    	border-radius: 20px;
    	position: relative;
        left: 33px;
        height:40px;
        width: 350px;
        top: 90px; 
    }
    
      input[type="email"]{
    	color: white;
    	border:none;
    	text-decoration: none;
    	font-family: sans-serif;
    	font-size: 20px;
        background: black;
    	border: 0.5px solid green;
    	text-align: center;
    	border-radius: 20px;
    	position: relative;
        left: 33px;
        height:40px;
        width: 350px;
        top: 30px; 
    }
    input[type="submit"]{
    	position: relative;
    	left: 160px;
    	top: 140px;
    	
        color: white;
    	border:none;
    	background:black;
    	width: 90px;
    	height:  60px;
    	border-radius: 20px;
    	font-family: sans-serif;
    	font-size: 18px;
    	text-align: center;
    	cursor:pointer;

    }
      input[type="number"]{
    	color: white;
    	border:none;
    	text-decoration: none;
    	font-family: sans-serif;
    	font-size: 20px;
        background: black;
    	border: 0.5px solid green;
    	text-align: center;
    	border-radius: 20px;
    	position: relative;
        left: 33px;
        height:40px;
        width: 350px;
        top: 60px; 
   
   }


    a{
    	text-decoration: none;
    	color: white;
    	font-size: 12px;
    	font-family: sans-serif;
    	position: relative;
    	top: 160px;
    	left: 330px;
    }
		 
		 
		 
		 
		 th{
		 color:black;
		 font-size:20px;
		 border:1px solid black;
		 }
		 
		 #t2{
		 
		 color:white;
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
	
</body>
<div class="prin">
        	<h2>Dados do usuário</h2>
	<form action="dados.php" method="POST"  >
         <input class="pn" type="text" name="nome" placeholder="primeiro nome" required=" ">
		 <input type="email" name="email" placeholder="digite seu email" required=" ">
         <input type="number" name="idade" placeholder="digite sua idade" required=" ">
         <input  id="pais" type="text" name="pais" placeholder="pais" required=" ">
         <input  type="submit" name="enviar" value="enviar" >
	</form>
</div>

<?php
    $dados = file('tabela.csv');
    for($i = 0; $i < sizeof($dados); $i++) {
        $dados[$i] = explode(",", $dados[$i]);
    }
  ?>
  
  <table class="tabela" >
    <h2 id="t2" >dados do usuario</h2>
<tr>
	 <th>Nome</th>
	 <th>email</th>
	 <th>Idade</th>
	 <th>pais</th>
</tr>
    <?php foreach ($dados as $dadosUser): ?>
        <tr>
          <?php foreach ($dadosUser as $dados): ?>
           <td><?= $dados ?></td>
           <?php endforeach ?>
        </tr>
    <?php endforeach ?>
  </table>
</body>
</html>