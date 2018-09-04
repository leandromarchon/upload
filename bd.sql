create database if not exists upload;
use upload;

create table cadastro(
	id int auto_increment primary key,
	nome varchar(50),
	imagem blob
);