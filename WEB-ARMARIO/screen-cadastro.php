<?php

require('banco_dados/conexaobdteste.php');

//inserir um dado no banco

$sql = $conexao->prepare("INSERT INTO aluno VALUES (null,'Erick GS','teste@teste.com','Desenvolvimento de Sistemas','59314424','noturno')"); 

$sql->execute();

?>