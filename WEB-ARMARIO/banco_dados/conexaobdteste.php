<?php


//configurações gerais da conexao
$servidor="localhost";
$usuario="root";
$senha="";
$banco="bdarmario";

//conexao

$conexao = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha)

?>