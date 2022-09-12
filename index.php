<?php
    require 'verify.php';

    if (isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])):
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu sistema</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">STORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastros
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?pg-clientes">Clientes</a></li>
                <li><a class="dropdown-item" href="index.php?pg-produtos">Produtos</a></li>
            </ul>
            </li>
        </ul>
        <div class="d-flex" role="search">
            <label style="margin-right: 15px;"><?php echo $nomeUser ?></label>
            <a href="logout.php">SAIR</a>
        </div>
        </div>
    </div>
    </nav>

    <main>
        <div class="container-fluid">
            <?php
                $pg = "";
                if(isset($_GET['pg']) && !empty($_GET['pg'])){
                    $pg = addslashes($_GET['pg']);
                }

                switch($pg){
                    case 'clientes': require 'clientes.php'; break;
                    case 'produtos': require 'produtos.php'; break;
                    default: require 'home.php';
                }

            ?>
        </div>
    </main>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
<?php else: header("Location: login.html"); endif; ?>