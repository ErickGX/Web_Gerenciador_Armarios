<?php
session_start();
print_r($_SESSION);


if ((!isset($_SESSION['RM']) == true) and (!isset($_SESSION['SENHA']) == true)) {
    unset($_SESSION['RM']);
    unset($_SESSION['SENHA']);
    header('Location: logintestERICK.php');
}else {
    $logado = $_SESSION['RM'];
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MENU ARMARIO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    
    <style>
        .body {
            background-color: lightblue;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-fixed-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"> Menu armario</a>
            <button type="button" class="btn btn-outline-primary">Button</button>
            
        </div>

        <div class="btn-sair">
            <a href="sair.php" class="btn-danger me-5">Sair</a>
        </div>

    </nav>
    <h1>IALA O CARA ENTROU E INICIOU A SESSAO PARABENS LEK</h1>

    <script src="" async defer></script>
</body>

</html>