--drop database if exists bdarmariov3;

create database if not exists bdarmariov3;

use bdarmariov3;

create table armario (

    id int not null auto_increment primary key,
    secao varchar(3) not null,
    numero int not null,     
    situacao varchar(12) not null,

    constraint uk_secao_numero unique (secao, numero)

);

create table curso (

    id int not null auto_increment primary key,
    codigo_curso varchar(2) not null,
    nome varchar(50) not null,
    duracao int not null

);

create table funcionario (

    id int not null auto_increment primary key,
    nome varchar(100) not null,
    senha varchar(20) not null,
    email varchar(100) not null,
    funcao varchar(50) not null

);

create table aluno (

    id int not null auto_increment primary key,
    rm int null unique,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    cpf varchar(11) not null unique,
    senha varchar(20) not null,
    modulo varchar(10) not null,
    periodo varchar(10) not null,
    situacao_matricula varchar(10) not null

);

create table aluno_curso (

    id_aluno int not null,
    id_curso int not null,

    constraint pk_id_aluno_id_curso primary key (id_aluno, id_curso),

    constraint fk_aluno_curso_aluno foreign key (id_aluno) references aluno(id),
    constraint fk_aluno_curso_curso foreign key (id_curso) references curso(id)

);

create table telefone_funcionario (

    id int not null auto_increment primary key,
    id_funcionario int not null,
    telefone varchar(11) not null,

    constraint fk_telefone_funcionario_funcionario foreign key (id_funcionario) references funcionario(id)

);

create table telefone_aluno (

    id int not null auto_increment primary key,
    id_aluno int not null,
    telefone varchar(11) not null,

    constraint fk_telefone_aluno_aluno foreign key (id_aluno) references aluno(id)

);

create table locacao (

    id int not null auto_increment primary key,
    plano varchar(9) not null,
    data_locacao date not null,
    id_aluno int not null,
    id_armario int not null,

    constraint fk_locacao_aluno foreign key (id_aluno) references aluno(id),
    constraint fk_locacao_armario foreign key (id_armario) references armario(id)

);

create table compartilhamento (

    id int not null auto_increment primary key,
    nome varchar(100) not null,
    rm varchar(9) not null,
    id_locacao int not null,

    constraint fk_compartilhamento_locacao foreign key (id_locacao) references locacao(id)

);
