<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Estudante</title>
  <link rel="stylesheet" href="stile.css">
  <style>
    </style>

</head>
<body>
<?php 

require 'headd.php';

?>

<?php
    $estudantes = file('estudantes.csv');
    for($i = 0; $i < sizeof($estudantes); $i++) {
        $estudantes[$i] = explode(",", $estudantes[$i]);
    }

     $escolas = file('escolas.csv');
    for($i = 0; $i < sizeof($escolas); $i++) {
        $escolas[$i] = explode(",", $escolas[$i]);
    }
    
?>

<section class="tabela">
  <table>
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Escola</th>
    <th>Idade</th>
    <th>Remover</th>
  </tr>
   <?php foreach($estudantes as $key => $estudante):?>
    <?php list($nome, $email, $escola, $idade) = $estudante ?>

    <tr>
      <td><?= $nome ?></td>
      <td><?= $email ?></td>
      <td><?= $escola ?></td>
      <td><?= $idade ?></td>
      <td><a href="/rmvstudent.php?id=<?= $key ?>"> &otimes; </a></td>
      </tr>
    <?php endforeach?>
  </table>
</section>

<section class="form">
  

  
  <form action="addestudante.php" method="POST">
    <a><legend>Cadastro do Estudante</legend></a>
    <input type="text"  name="nome" placeholder="Nome" required="">
    <input type="email" name="email" id="email" placeholder="Email" required="">
    <input type="number" name="idade" id="idade" placeholder="Idade" required="">  
    <select name="escolas" id="">
      <?php foreach ($escolas as $value): ?>
        <?php list($nomeEscola) = $value; ?>

      <option value="<?=$nomeEscola?>"><?= $nomeEscola ?></option>
      <?php endforeach ?>
    </select>
    <input id="submit" type="submit" value="Cadastrar">

  </form>

</section>
  </div>




</body>

</html>
