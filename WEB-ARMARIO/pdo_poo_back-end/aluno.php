<?php


// create table aluno (

//     id int not null auto_increment primary key,
//     rm int null unique,
//     nome varchar(100) not null,
//     email varchar(100) not null unique,
//     cpf varchar(11) not null unique,
//     senha varchar(20) not null,
//     modulo varchar(10) not null,
//     periodo varchar(10) not null,
//     situacao_matricula varchar(10) not null

// );

class aluno {

    protected int $_id;
    protected int $_rm;
    protected string $_nome;
    protected string $_email;
    protected string $_cpf;
    protected string $_senha;
    protected string $_modulo;
    protected string $_periodo;
    protected string $_situação_matricula;


    protected function __construct(int $_id, int $_rm , string $_nome , string $_email , string $_cpf , string $_senha , string $_modulo, string $_periodo, string $_situação_matricula){
        $this->_id = $_id;
        $this->_rm = $_rm;
        $this->_nome = $_nome;
        $this->_email = $_email;
        $this->_cpf = $_cpf;
        $this->_senha = $_senha;
        $this->_modulo = $_modulo;
        $this->_periodo = $_periodo;
        $this->_situação_matricula = $_situação_matricula;
    }
    
    public function getID(){
        return $this->_id;
    }   
    public  function setID($id){
        $this->_id = $id;
    }


    public function getRM(){
        return $this->_rm;
    }
    public  function setRM($rm){
        $this->_rm = $rm;
    }


    public function getNome(){
        return $this->_nome;
    }
    public  function setNome($nome){
        $this->_nome = $nome;
    }


    public function getEmail(){
        return $this->_email;
    }   
    public  function setEmail($email){
        $this->_email = $email;
    }


    public function getCPf(){
        return $this->_cpf;
    }
    public  function setCPf($cpf){
        $this->_cpf = $cpf;
    }


    public function getSenha(){
        return $this->_senha;
    }
    public function setSenha($senha){
        $this->_senha = $senha;
    }


    public function getModulo(){
        return $this->_modulo;
    }
    public  function setModulo($modulo){
        $this->_modulo = $modulo;
    }


    public function getPeriodo(){
        return $this->_periodo;
    }
    public  function setPeriodo($periodo){
        $this->_periodo = $periodo;
    }


    public function getSituacaoMatricula(){
        return $this->_situacao_Matricula;
    }
    public  function setSituacaoMatricula($situacao_matricula){
        $this->_situacao_Matricula = $situacao_matricula;
    }


    // create table aluno (

    //     id int not null auto_increment primary key,
    //     rm int null unique,
    //     nome varchar(100) not null,
    //     email varchar(100) not null unique,
    //     cpf varchar(11) not null unique,
    //     senha varchar(20) not null,
    //     modulo varchar(10) not null,
    //     periodo varchar(10) not null,
    //     situacao_matricula varchar(10) not null
    
    // );
    

    ///Funcao cadastro aluno

    include 'conexaobd.php'
    function cadAluno (){
        $stmt = ->prepare("INSERT INTO bdarmariov3 (name, age) VALUES (?, ?)");
        $stmt->execute([$_POST['name'], 29]);
        $stmt = null;

    }





}   












?>