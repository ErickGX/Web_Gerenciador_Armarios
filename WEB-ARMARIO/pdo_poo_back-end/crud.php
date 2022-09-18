<?php



Class Crud extends ConexaoBD {

    

    //Problema em criar uma query de insert porque a funcao que carega a conexao do BD fica na Classe ConexaoBD e nao consigo usar a funcao nesta outra funcao
    public function insertAluno(){

        
            
        

        $query = 'INSERT INTO alunos (rm, nome, email, cpf, senha, modulo, periodo, situacao_matricula) VALUES (:rm, :nome, :email, :cpf, :senha, :modulo, :periodo, :matricula)';

        $stmt = $conexao->prepare($query);



    }

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


?>