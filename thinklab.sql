create database ScholarBase;
use ScholarBase;

create table usuario(
	id int primary key auto_increment,
    email varchar(100) unique not null,
    nome varchar(100),
    senha varchar(255) not null
);

create table pesquisador(
	id int primary key auto_increment,
    biografia text,
    lates varchar(100),
    instituicao varchar(50) not null,
    usuario_id int,
    foreign key(usuario_id) references usuario(id) on  delete cascade
);

create table artigo(
	id int primary key auto_increment,
    titulo varchar(50) not null,
    resumo varchar(100) not null,
    data_publicacao date not null,
    doi  varchar(100) unique,
    link varchar(100),
    palavra_chave varchar(50),
    pesquisador_id int,
    arquivo_id int,
    foreign key(pesquisador_id) references pesquisador(id) on delete restrict
);

create table arquivo(
	id int primary key auto_increment,
    tipo varchar(50) not null,
    artigo_id int,
    foreign key(artigo_id) references artigo(id) on delete cascade
);

create table categoria(
	id int primary key auto_increment,
    nome varchar(100) not null unique
);

create table categoria_artigo(
	id int primary key auto_increment,
    categoria_id int, 
    artigo_id int,
    foreign key(categoria_id) references categoria(id) on delete restrict,
    foreign key(artigo_id) references artigo(id) on delete cascade
);

create table favorito(
	id int primary key auto_increment,
    usuario_id int,
    artigo_id int,
    foreign key(usuario_id) references usuario(id) on delete cascade,
    foreign key(artigo_id) references artigo(id) on delete cascade
);




