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
    lattes varchar(100),
    instituicao varchar(200) not null,
    usuario_id int unique not null,
    foreign key(usuario_id) references usuario(id) on  delete cascade
);

create table artigo(
	id int primary key auto_increment,
    titulo varchar(200) not null,
    resumo text not null,
    data_publicacao date not null,
    doi  varchar(100) unique null,
    link varchar(500) null
);

create table artigo_pesquisador(
	id int primary key auto_increment,
    artigo_id int,
    pesquisador_id int,
    foreign key(artigo_id) references artigo(id) on delete cascade,
    foreign key(pesquisador_id) references pesquisador(id) on delete cascade
);

create table arquivo(
	id int primary key auto_increment,
    tipo varchar(50) not null,
    artigo_id int not null,
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
    unique(usuario_id, artigo_id),
    foreign key(usuario_id) references usuario(id) on delete cascade,
    foreign key(artigo_id) references artigo(id) on delete cascade
);

ALTER TABLE arquivo DROP foreign key arquivo_ibfk_1;
AlTER TABLE arquivo DROP COLUMN artigo_id;

ALTER TABLE artigo ADD arquivo_id int;
ALTER TABLE artigo ADD CONSTRAINT arquivo_id FOREIGN KEY (arquivo_id) REFERENCES arquivo(id);
ALTER TABLE favorito ADD quantidade_favoritos int;

/*
create table palavra_chave(
	id int primary key auto_increment,
    nome varchar(100) unique not null
);  #Excluir

create table artigo_palavra_chave( #excluir
	id int primary key auto_increment,
    artigo_id int not null,
    palavra_chave_id int,
    foreign key(artigo_id) references artigo(id) on delete cascade,
    foreign key(palavra_chave_id) references palavra_chave(id) on delete cascade
);
DROP TABLE palavra_chave;
DROP TABLE artigo_palavra_chave
*/



