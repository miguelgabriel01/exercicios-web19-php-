<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
/*ptopiedades da pagina */

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

h1{
  color: black;
  font-size: 100px;
  text-align: center;
}
</style>
</head>

<body>

<header class="menu" >

<a href="#" >FIFA</a>
<nav>
      
  <li><a href="index.php" >Inicio</a></li>
  <li><a href="index.php" >Entrar</a></li>
  <li><a href="CadastrarUsuario.php" >Cadastrar</a></li>
</nav>

</header>


<h1>BEM VINDO!!!!</h1>
 


</body>
</html>