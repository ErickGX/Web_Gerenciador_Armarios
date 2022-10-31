<?php

//require('banco_dados/conexaobdteste.php');  versão sem orientação a objeto 

require_once('erick-BD-Orientado/conexaoBD.php'); //nova versao que estou montando com funcoes e orientação PDO BD

try {
    $rm = $_POST['rm'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];
    $senha = $_POST['senha'];
    $periodo = $_POST['periodo'];

    ///todas verificações de campos vazios , com simbolos estranhos e informaçoes invalidas sera feito pelo lado cliente usando javascript
    
    //verificando se o RM informado já existe no banco de dados para nao dar expections de erros
    $stmt = $pdo->prepare("select * from alunos where rm = :rm");
    $stmt->bindparam(':ra', $rm);
    $stmt->execute();







} catch (\Throwable $th) {
    //throw $th;
}











?>