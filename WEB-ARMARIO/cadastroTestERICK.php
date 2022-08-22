<?php

// //Codigos de validacoes

// filter_input(); -> filter_var();
 /*
// FILTER_SANITIZE_SPECIAL_CHARS;
// FILTER_SANITIZE_NUMBER_INT;
// FILTER_SANITIZE_EMAIL;


// FILTER_VALIDATE_INT;
// FILTER_VALIDATE_EMAIL;
// FILTER_VALIDATE_BOOLEAN;

*/
if(isset($_POST['enviar'])) {
    
    $rm = $_POST['rm'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];
    $senha = $_POST['senha'];
    $periodo = $_POST['periodo'];

    //ARRAY DE ERROS
    $erros = [];

    //SANITIZAR 

    // https://www.youtube.com/watch?v=4IHtfXrNN4w&t=1005s

    $rm = filter_input(INPUT_POST, 'rm', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
    $periodo = filter_input(INPUT_POST, 'periodo', FILTER_SANITIZE_SPECIAL_CHARS);  

    echo "<p>RM   : ".$rm."</p>";
    echo "<p>Nome : ".$nome."</p>";
    echo "<p>Email : ".$email."</p>";
    echo "<p>Curso : ".$curso."</p>";
    echo "<p>Senha : ".$senha."</p>";
    echo "<p>Periodo : ".$periodo."</p>";


    //Filtros de validacao
    if(!$rm = filter_input(INPUT_POST, 'rm', FILTER_VALIDATE_INT)){
        $erros[] = "RM invalido, insira seu RM cadastrado na ETEC irmã agostina";
    }
     
    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
        $erros[] = "E-mail invalido";
    }
     
    if(!empty($erros)){
        foreach($erros as $erro) {
            echo "<li>$erro</li>";
        }
    }else{
        echo "<p>Dados Corretos</p>";
    }


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

         
         <form method="POST" action="ValidaCadastro.php"><br> 
        <form method="POST" action="#"><br>

            <input type="number" name="rm" id="" placeholder="bota rm ae" autofocus required  maxlength="5" ><br>

            <input type="text" name="nome" id="" placeholder="bota name ae" required><br>

            <input type="email" name="email" id="" placeholder="bota email ae" required><br>

            <input type="text" name="curso" id="" placeholder="bota curso ae" required><br>

            <input type="password" name="senha" id="" placeholder="bota senha ae" required><br>

            <input type="text" name="periodo" id="" placeholder="bota periodo ae" required><br>
        
            <button type="submit" name="enviar" >enviar</button>


        </form>