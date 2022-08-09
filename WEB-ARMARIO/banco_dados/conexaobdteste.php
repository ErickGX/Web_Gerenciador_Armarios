<?php


//configurações gerais da conexao
$servidor="localhost";
$usuario="root";
$senha="";
$banco="bdarmariov2";

//conexao

$conexao = new mysqli($servidor,$usuario,$senha,$banco);

    if($conexao->connect_errno)
    {
        echo "Erro". mysqli_connect_error(). mysqli_errno($conexao);
    }
    else{
        echo "Conexão Efetuada";
        echo "<br><br>";
    }


?>