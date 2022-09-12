<?php

session_start();

$localhost = "localhost";
$user = "root";
$senha = "";
$banco = "store";

global $pdo;

try {

    //orientada a objetos com pdo
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $senha);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION);

}catch(PDOException $error){
    echo "ERRO: ".$error->getMessage();
    exit;
}


?>