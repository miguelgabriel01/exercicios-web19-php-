<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Escola</title>
  <link rel="stylesheet" href="escola.css">
  <style>
    .container  {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);

    }
  </style>
   
</head>

<body>
<?php 
require 'headd.php';
?>
 
<?php
    $escolas = file('escolas.csv');
    for($i = 0; $i < sizeof($escolas); $i++) {
        $escolas[$i] = explode(",", $escolas[$i]);
    }
?>
<section class="tabela">  
  <table>
  <tr>
    <th>Nome</th>
    <th>Estado</th>
    <th>Cidade</th>
    <th>Bairro</th>
    <th>Remover</th>
  </tr>
   <?php foreach($escolas as $key => $escola):?>
    <tr>
    <?php foreach($escola as $escola1):?>
      <td><?= $escola1?></td>
  <?php endforeach?>
    <td>
    <a class="btn-remove" href="rmvschool.php?id=<?= $key?>">&otimes;</a>
    </td>
      </tr>
    <?php endforeach?>
  </table>
</section>
  <section class="form">
  <form action="addescola.php" method="POST">
     <input type="text"  name="nome" placeholder="Nome da Escola" required="" >
     <input type="text" name="estado" placeholder="Estado" required="">
     <input type="text" name="cidade" placeholder="Cidade" required="">
      <input type="text" name="bairro" placeholder="Bairro/Logradouro" required="">
      <input id="submit" type="submit" value="Cadastrar">

  </form>
</section>
</body>
</html>
required=""