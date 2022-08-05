<?php

require('banco_dados/conexaobdteste.php');

session_start();



if(isset($_POST['Logar']) && !empty($_POST['rmlogin']) && !empty($_POST['senhalogin'])) 
{

    
    $rmlogin = $_POST['rmlogin'];
    $senhalogin = $_POST['senhalogin'];

    // print_r('<br>');
    // print_r("RM : "    .$rmlogin);
    // print_r('<br>');
    // print_r("SENHA :"    . $senhalogin);

    $consulta = "SELECT * FROM aluno WHERE rm_aluno =  '$rmlogin' and senha = '$senhalogin'";

    $resultado = $conexao->query($consulta);

    // print_r($consulta);
    // print_r('<br>');
    // print_r($resultado);



    if(mysqli_num_rows($resultado) < 1){
        unset($_SESSION['RM']);
        unset($_SESSION['SENHA']);
        header('Location: logintestERICK.php');

    }else{

        $_SESSION['RM'] = $rmlogin;
        $_SESSION['SENHA'] = $senhalogin;
        header('Location: menu.php');
    }



}else{
    //nao acessa   e retorna prologin
    header('Location: logintestERICK.php');
}



?>