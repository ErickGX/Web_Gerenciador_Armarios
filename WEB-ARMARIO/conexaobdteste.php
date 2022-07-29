<?php


//configurações gerais da conexao
$servidor="localhost";
$usuario="root";
$senha="";
$banco="bdarmario";

//conexao

$con = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha)

?>