<?php
session_start();
print_r($_SESSION);


if((!isset($_SESSION['RM']) == true) and (!isset($_SESSION['SENHA']) == true))
{
    unset($_SESSION['RM']);
    unset($_SESSION['SENHA']);
    header('Location: logintestERICK.php');
}

 $logado = $_SESSION['RM'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

       <h1>IALA O CARA ENTROU E INICIOU A SESSAO PARABENS LEK</h1>
        
        <script src="" async defer></script>
    </body>
</html>