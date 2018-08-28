DROP DATABASE vendas;
CREATE DATABASE vendas;
USE vendas;
CREATE TABLE clientes(
	id_cliente int not null auto_increment,
	nome varchar(45) not null,
	endereco varchar(100) not null,
	cep varchar(9) not null,
	email varchar(80) not null,
	senha varchar(80) not null,
	telefone varchar(45) null,
	data_nascimento date not null,
	primary key(id_cliente)
);

CREATE TABLE categorias(
	id_categoria int not null auto_increment,
	nome varchar(45) not null,
	primary key(id_categoria)
);

CREATE TABLE produtos(
	id_produto int not null auto_increment,
	nome varchar(45) not null,
	valor float(8,2) not null,
	descricao text,
	destaque int(1) not null default 0,
	id_categoria int not null,
	primary key(id_produto),
	foreign key(id_categoria) references categorias(id_categoria)
);

CREATE TABLE imagens(
	id_imagem int not null auto_increment,
	titulo varchar(50) not null,
	caminho_imagem text not null,
	id_produto int not null,
	primary key(id_imagem),
	foreign key(id_produto) references produtos(id_produto)
);

CREATE TABLE vendas(
	id_venda int not null auto_increment,
	data_venda date not null,
	hora_venda time not null,
	valor_total float(10,2) not null,
	cep_entrega varchar(9) not null,
	status_entrega int(1) not null default 0,
	status_pagamento int(1) not null default 0,
	id_cliente int not null,
	primary key(id_venda),
	foreign key(id_cliente) references clientes(id_cliente)
);

CREATE TABLE vendas_produtos(
	id_venda_produto int not null auto_increment,
	id_venda int not null,
	id_produto int not null,
	valor float(8,2) not null,
	quantidade int not null default 1,
	primary key(id_venda_produto),
	foreign key(id_venda) references vendas(id_venda),
	foreign key(id_produto) references produtos(id_produto)
);

CREATE TABLE projetos(
	id_projeto int not null auto_increment,
	nome varchar(45) not null,
	valor float(8,2) not null,
	descricao text,
	autor varchar(45) not null default 0,
	id_categoria int not null,
	primary key(id_projeto),
	foreign key(id_categoria) references categorias(id_categoria)
);

CREATE TABLE usuarios(
	id_usuario INT NOT NULL  AUTO_INCREMENT,
	nome varchar(100) NOT NULL,
	tipo char NOT NULL default 2,
	senha varchar(45) NOT NULL,
	email varchar(100) NOT NULL,
	PRIMARY KEY (id_usuario)  
);
insert into usuario (nome,senha,email,tipo) 
	values("yuri",123,"yuri@localhost.com.br",1);