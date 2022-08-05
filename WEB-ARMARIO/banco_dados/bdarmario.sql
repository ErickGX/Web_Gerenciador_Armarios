mysql -u root -p

drop database if exists barmario;

create database if not exists bdarmario;

use bdarmario;



create table armario(
    nome_armario varchar(3) not null PRIMARY KEY,     
    status_armario varchar(12) not null,
    andar varchar(14) not null
);

create table aluno(
    rm_aluno int not null PRIMARY KEY,    
    nome VARCHAR(100) not null,
    email VARCHAR(100) not null,
    curso VARCHAR(50) not null, 
    senha VARCHAR(20) not null ,
    periodo VARCHAR(10) not null
);

create table administracao(

    id_adm int not null AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(20) not null,
    senha_adm VARCHAR(20) not null,
    nome_adm VARCHAR(100) not null,
    email VARCHAR(100) not null,
    telefone VARCHAR(11) not null

);


create table telefones(

    rm_aluno int not null,
    telefone varchar(11) not null,

    primary key (rm_aluno,telefone),
    constraint FK_telefones_aluno FOREIGN KEY (rm_aluno) 
        REFERENCES aluno(rm_aluno)
);

create table aluguel(

    id_aluguel int AUTO_INCREMENT not null PRIMARY KEY,
    plano VARCHAR(9) not null,
    data_aluguel date not null,
    nome_armario VARCHAR(3) NOT NULL,
    rm_aluno int NOT NULL,

    constraint FK_aluguel_aluno FOREIGN KEY (rm_aluno) 
        REFERENCES aluno(rm_aluno),
    constraint FK_aluguel_armario FOREIGN KEY (nome_armario)
        REFERENCES armario(nome_armario)   
             
);
