<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">

/*menu*/

*{
margin:0;
padding:0;
font-size: 100%;
box-sizing: border-box;
font-family: ;
}

.container{
display:flex;
flex-direction:row;
flex-wrap:nowrap;
justify-content:center;
align-items:center;
background: red;
width:100%;
height:400px;
background-image:url("010.jpg");
background-size:cover;
background-clip: content-box;
background-size: cover;
background-position: center;
border-bottom-right-radius:20%;
}

p{
display:flex;
font-size:30px;
border:1px solid red;
height:50px;
justify-content:center;
margin-top:20px;
background:rgba(0,0,0,0.5);
color:white;
text-align:center;
}

.menu{
display:flex;
flex-direction:row;
flex-wrap:nowrap;
justify-content:space-between;
align-items:center;
background: black;
width:100%;
height:70px;
}

nav a,li{
text-decoration:none;
font-size:20px;
color:white;
list-style:none;
padding:10px;
}

a{
text-decoration:none;
font-size:20px;
color:white;
list-style:none;
padding:10px;
}

nav{
display:flex;
}


li{
text-decoration:none;
}


/* corpo*/

.formulario{
display:flex;
border:2px solid black;
margin-top:30px;
height:800px;
width:100%;
flex-direction:row;
justify-content:center;
align-items:center;
}

.cadastro{
display:flex;
width:300px;
height:200px;
background:darkcyan;
color:white;
text-align:center;
font-size:20px;
text-decoration:none;
margin:10px;
justify-content:center;
align-items:center;
}


th{
color:black;
font-size:40px;
padding: 30px;
border-bottom: 1px solid black;
}
		 
#t2{
color:white;
font-size:35px;
text-align:center;
}

.tabela{
display:flex;
border-collapse:collapse;
font-family:arial,sans-serif;
margin: 0 auto;
}

td{
text-align:center;
padding:15px;
font-size:25px;
color:black;
border-bottom: 1px solid black;
}

tr{
text-align:center;
padding:15px;
font-size:40px;
color:black;
}
		 
#apg{
color:black;
font-size:40px;
text-decoration:none;
}

#jogadores{
text-decoration: none;
color: darkcyan;
font-size: 20px;
}

</style>
</head>

<body>

<header class="menu" >

<a href="#" >FIFA</a>
<nav>
      
  <li><a href="index.php" >home</a></li>
  <li><a href="TimesCadastrados.php" >Times</a></li>
  <li><a href="jogadoresCadastrados.php" >jogadores</a></li>
</nav>

</header>


 
 <section class="formulario" >
 
 <?php
 $dados = file('times.csv');
 for($i = 0; $i < sizeof($dados); $i++) {
 $dados[$i] = explode(",", $dados[$i]);
 }
 ?>
 
 <table class="tabela" >
 
 <tr>
 <th>seleção</th>
 <th>deletar</th>
 
 
 
 </tr>
 
 
 
 <?php foreach ($dados as $i => $dadosUser): ?>
 <tr>
 <?php foreach ($dadosUser as  $dados): ?>
 <td><?= $dados ?></td>
 <?php endforeach ?>
 
 <td><a id="apg" href="apagarTime.php?id=<?= $i ?>">X</a></td>
 </tr>
 
 <?php endforeach ?>
 </table>
 
 </section>

</body>
</html>