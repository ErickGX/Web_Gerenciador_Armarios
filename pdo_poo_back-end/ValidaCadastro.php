<?php

//require('banco_dados/conexaobdteste.php');  // versão sem orientação a objeto 

// require_once ''; //nova versao que estou montando com funcoes e orientação PDO BD

// print_r($_REQUEST);


// if (isset($_POST['enviar']) && !empty($_POST['rm']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['curso']) && !empty($_POST['senha']) && !empty($_POST['periodo'])) {

    // print_r($_POST['rm']);
    // print_r($_POST['nome']);
    // print_r($_POST['email']);
    // print_r($_POST['curso']);
    // print_r($_POST['senha']);
    // print_r($_POST['periodo']);


    // $rm = $_POST['rm'];
    // $nome = $_POST['nome'];
    // $email = $_POST['email'];
    // $curso = $_POST['curso'];
    // $senha = $_POST['senha'];
    // $periodo = $_POST['periodo'];



    //  $sql = $conexao->prepare("INSERT INTO aluno VALUES ('?','?','?','?','?','?')"); 
    //  $sql->execute(array($rm,$nome,$email,$curso,$senha,$periodo));
    // header('Location: logintestERICK.php');


    //Funcao insert Coringa recebendo dados via array (Funcao antiga de 2012 possivelmente mto vulneravel, usada para testes)
    include 'Conexaobd.php';


    $rm = $_POST['rm'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $modulo = $_POST['modulo'];
    $periodo = $_POST['periodo'];
    $matricula = $_POST['matricula'];

    $insert = new Conexaobd();

    $insert->Conectado();



    //relacionado a funcao insert com array desabilitada

    // $values = array('rm' => $rm, 'nome' => $nome, 'email' => $email, 'cpf' => $cpf, 'senha' => $senha, 'modulo' => $modulo, 'periodo' => $periodo, 'situacao_matricula' => $matricula);

    // $table = 'aluno';

    // $insert->insert($table, $values);


    //}

//DAQUI PRA BAIXO SÓ B.O

//inserir um dado no banco sem proteçao

//$sql = $conexao->prepare("INSERT INTO aluno VALUES (666999,'SQL','teste@teste.com','Desenvolvimento de Sistemas','kekson4444','noturno')"); 
//$sql->execute();

//ANTI SQL INJECTION SEGURANÇA


//  $rm = $_POST['rm'];
//  $nome = $_POST['nome'];
//  $email = $_POST['email'];
//  $curso = $_POST['curso'];
//  $senha = $_POST['senha'];
//  $periodo = $_POST['periodo'];


//  $sql = $conexao->prepare("INSERT INTO aluno VALUES ('?','?','?','?','?','?')"); 
//  $sql->execute(array($rm,$nome,$email,$curso,$senha,$periodo));
