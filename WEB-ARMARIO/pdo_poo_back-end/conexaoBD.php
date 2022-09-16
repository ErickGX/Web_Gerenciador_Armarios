<?php

// //conectando ao BD versao antiga sem POO

// try{
//   $pdo = new PDO('mysql:host=localhost;dbname=dbarmariov3;charset=utf8', 'root','');

//   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   $output = 'Conexão estabelecida. <br>';
// }catch(PDOException $errobd) {
//     $output = 'Impossivel conectar BD : ' . $errobd . '<br>';
// }
// //echo $output;



///classe de conexao com banco de dados
class conexaobd
{

    private $_servername;
    private $_username;
    private $_password;
    private $_dbname;
    public $_conexao;


    //função para instanciar a conexao com BD
    function __construct($server, $user, $passwd, $db)
    {
        $this->_servername = $server;
        $this->_username = $user;
        $this->_password = $passwd;
        $this->_dbname = $db;

    }

    //funcao para verificar se de fato possui uma conexao valida
    public  function Conectado(){
            
    
        try {
            $this->_conexao = new PDO("mysql:host=$this->_servername; dbname=$this->_dbname; charset=utf8", $this->_username, $this->_password);

            $this->_conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->_conexao->exec("set names utf8");

            //echo "conexao estabelecida";
        } catch (PDOException $erro) {
            echo "Erro na conexão:" . $erro->getMessage();
        }
        
        return $this->_conexao ? $this->_conexao : null; 
    }
}
////https://www.youtube.com/watch?v=Xbkels1hDps