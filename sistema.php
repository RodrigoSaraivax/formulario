<?php
    session_start();
    /* print_r($_SESSION); */
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location:login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Sistema</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white
        }

        .header{
            background-color: dodgerblue;
            height: 40px;
        }

        p{
            text-align: left;
        }
    </style>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema</a>
    <a href="sair.php" class="btn btn-danger me-3">Sair</a>
  </div>
</nav>

    <h1>Acessou o Sistema!</h1>
    <h2>Olá <?=$logado?>!</h2>
</body>
</html>