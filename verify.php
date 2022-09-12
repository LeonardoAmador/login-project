<?php

    require 'connection2.php';

    if (isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])) {

        require_once 'Usuario.class.php';
        $u = new Usuario();

        $listLogged = $u->logged($_SESSION['iduser']);
        $nomeUser = $listLogged['name'];

    }else {
        header("Location: login.html");
    }
?>