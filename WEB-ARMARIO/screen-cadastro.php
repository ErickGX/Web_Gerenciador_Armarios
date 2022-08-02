<?php

require('banco_dados/conexaobdteste.php');

//inserir um dado no banco sem proteçao

//$sql = $conexao->prepare("INSERT INTO aluno VALUES (666999,'SQL','teste@teste.com','Desenvolvimento de Sistemas','kekson4444','noturno')"); 
//$sql->execute();

//ANTI SQL INJECTION SEGURANÇA

if (isset($_POST['enviar'])&& isset($_POST['rm'])&& isset($_POST['nome'])&& isset($_POST['email'])
&& ($_POST['curso'])&& isset($_POST['senha'])&& isset($_POST['periodo'])){

 $rm = $_POST['rm'];
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $curso = $_POST['curso'];
 $senha = $_POST['senha'];
 $periodo = $_POST['periodo'];


 $sql = $conexao->prepare("INSERT INTO aluno VALUES ('?','?','?','?','?','?')"); 
 $sql->execute(array($rm,$nome,$email,$curso,$senha,$periodo));
}  


 ?>

 <!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inserindo data</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
      
        <h1>Teste inserir com sql</h1>


        <form method="post">
        <input type="number" name="rm" id="" placeholder="bota rm ae">
        <input type="text" name="nome" id="" placeholder="bota name ae">
        <input type="email" name="email" id="" placeholder="bota email ae">
        <input type="text" name="curso" id="" placeholder="bota curso ae">
        <input type="password" name="senha" id="" placeholder="bota senha ae">
        <input type="text" name="periodo" id="" placeholder="bota periodo ae">

        <button type="submit">enviar</button>




        </form>
    
    </body>
 </html>