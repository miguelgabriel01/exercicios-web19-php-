<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
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







.formulario2{
display:flex;
border:2px solid black;
margin-top:30px;
height:;
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




body{
margin:0;
padding:0;
font-family:sans-serif;
background: url(img1.jpg);
background-size: cover;
}

.principal{
position: absolute;
top:50%;
left:50%;
margin-top: 100px;
margin-bottom: 100px;
transform:translate(-50%,-50%);
width:400px;
padding:40px;
background: rgba(0,0,0,.8);
box-sizing: border-box;
box-shadow:0 15px 25px rgba(0,0,0,.5);
border-radius:10px;
}

.principal h2{
margin:0 0 30px;
padding:0;
color:#fff;
text-align: center;
}

.principal .meio{
position: relative;
}

.principal .meio input{
width:100%;
padding:10px 0;
font-size:16px;
color:#fff;
letter-spacing:1px;
margin-bottom:30px;
border:none;
border-bottom:1px solid;
outline:none;
background: transparent;
}

.principal .meio label{
position: absolute;
top:0;
left:0;
padding:10px 0;
font-size:16px;
color:#fff;
pointer-events: none;
transition: .5s;
}

.principal .meio input:focus~label,
.principal .meio input:valid~label
{
top:-18px;
left:0;
color:#03a9f4;
font-size:12px;
}


.principal input[type="submit"]{
background: transparent;
border: none;
outline: none;
color:#fff;
background:#03a9f4;
padding:10px 20px;
cursor: pointer;
border-radius:10px;
}

.form{
display: flex;
width: 100%;
height: 900px;
background:darkcyan;
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

   <?php

            $time = file('times.csv');
            foreach($time as $equipe){
            $times[] = explode(',', $equipe);

            }

       ?>


<section class="form">


 
      <div class="principal">
	       <h2>Jogador</h2>
    
          <form action="adicionarJogador.php" method="post">

    	  <div class="meio">
    	  	 <input type="text" name="nome" required=" " >
    	  	 <label>nome</label>
           </div> 
    

          <div class="meio">
              <input type="text" name="pais"  required=" " >
              <label>pais</label>
           </div>    
    
     <select name="time">
      <option>equipe</option>p
         <?php foreach ($times as $equipe): ?>
              <?php list($t) = $equipe; ?>
                <option value="<?= TRIM($t) ?>"><?= $t?></option>
            <?php endforeach ?>
       </select>
       

          <div class="meio">
              <input type="text" name="sexo"  required=" " >
              <label>sexo</label>
          </div>    
    

          <div class="meio">
              <input type="number" name="idade"  required=" " >
              <label>idade</label>
          </div>    
    
           

          
         <input type="submit" name="" value="salvar">
        
        </form>
       
    </div>

	
</section>
 
 
 <section class="formulario" >
 



 <section class="formulario2" >
 
 <?php
 $dados = file('jogadores.csv');
 for($i = 0; $i < sizeof($dados); $i++) {
 $dados[$i] = explode(",", $dados[$i]);
 }
 ?>



 
 <table class="tabela" >
 
 <tr>
 <th>nome</th>
 <th>pais</th>
 <th>time</th>
 <th>sexo</th>
 <th>idade</th>
 <th>deletar</th>
 
 </tr>
 
 
 
 <?php foreach ($dados as $j => $dadosUser): ?>
 <tr>
 <?php foreach ($dadosUser as  $dado): ?>
 <td><?= $dado ?></td>
 <?php endforeach ?>
 <td><a id="apg" href="apagarJogadores.php?id=<?= $j ?>">x</a></td>
 </tr>
 
 <?php endforeach ?>
 </table>
 
 </section>
</body>
</html>

      