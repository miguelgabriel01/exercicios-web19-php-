<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cadrasto</title>
</head>
<style>
	

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