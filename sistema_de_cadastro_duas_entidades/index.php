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







.formulario{
display:flex;
border:2px solid black;
margin-top:30px;
height:600px;
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
</style>
</head>

<body>

<header class="menu" >

<a href="#" >FIFA</a>
<nav>
      
  <li><a href="index.php" >Home</a></li>
  <li><a href="TimesCadastrados.php" >Times</a></li>
  <li><a href="jogadoresCadastrados.php" >jogadores</a></li>
</nav>

</header>


 
 <section class="formulario" >
 
 <div class="cadastro"><a href="cadastrarTime.php" >cadastrar novo time</a></div>
 <div class=" cadastro"><a href="TimesCadastrados.php" >times cadastrados</a></div>
 
 </section>

</body>
</html>