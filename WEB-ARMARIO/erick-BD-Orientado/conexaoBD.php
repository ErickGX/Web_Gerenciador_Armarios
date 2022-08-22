<?php

//conectando ao BD

try{
  $pdo = new PDO('mysql:host=localhost;dbname=bdarmariov2;charset=utf8', 'root','');

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $output = 'Conexão estabelecida. <br>';
}catch(PDOException $errobd) {
    $output = 'Impossivel conectar BD : ' . $errobd . '<br>';
}
//echo $output;





?>