<?php

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'connection2.php';
    require 'Usuario.class.php';

    $u = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if ($u->login($email, $senha) == true) {
        if(isset($_SESSION['iduser'])){
            header("Location: index.php");
        }else {
            header("Location: login.html");
        }
    }else{
        header("Location: login.html");
    }

}else {

    header("Location: login.html");

}




?>