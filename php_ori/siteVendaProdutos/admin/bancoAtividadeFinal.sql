
/* Yuri Mansani Vieira - [ MENOR ] */
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


















