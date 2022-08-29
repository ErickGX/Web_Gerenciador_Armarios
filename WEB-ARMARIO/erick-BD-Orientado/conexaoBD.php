<?php

// //conectando ao BD

// try{
//   $pdo = new PDO('mysql:host=localhost;dbname=dbarmariov3;charset=utf8', 'root','');

//   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   $output = 'Conexão estabelecida. <br>';
// }catch(PDOException $errobd) {
//     $output = 'Impossivel conectar BD : ' . $errobd . '<br>';
// }
// //echo $output;




try {
  $conexao = new PDO("mysql:host=localhost; dbname=bdarmariov2", "root", "");
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexao->exec("set names utf8");

} catch (PDOException $erro) {
  echo "Erro na conexão:" . $erro->getMessage();
}

?>