<?php
session_start();

$senha = $_POST['senha'] ?? '' ;
$email = $_POST['email'] ?? '' ;
if ($senha == 'miguel' && $email =='gabrielogabriel10@gmail.com') {
    $_SESSION['autorizado'] = true;
}

if ($senha == 'gabriel' && $email =='mgbs@discente.ifpe.edu.br') {
    $_SESSION['autorizado'] = true;
}


header('location: index.php');
?>