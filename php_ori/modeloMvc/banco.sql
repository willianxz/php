DROP DATABASE mercado;
CREATE DATABASE mercado;
USE mercado;


/* Criacao da tabela cidades */
CREATE TABLE cidades(
	id_cidade int not null auto_increment,
	nome varchar(45) not null,
	primary key(id_cidade)
);


/* Criacao da tabela clientes */
CREATE TABLE clientes(
	id_cliente int not null auto_increment,
	nome varchar(45) not null,
	data_nascimento date not null,
	renda float(7,2) not null,
	dependentes int(2),
	id_cidade int not null,
	primary key(id_cliente),
	foreign key(id_cidade) references cidades(id_cidade)
);

/* Criacao da tabela da categorias */
CREATE TABLE categorias(
	id_categoria int not null auto_increment,
	nome varchar(45) not null,
	primary key(id_categoria)
);

/*criacao da tabela funcionarios */
CREATE TABLE funcionarios(
	id_funcionario INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(45) NOT NULL,
	salario FLOAT(7,2) NOT NULL,
	cargo VARCHAR(45) NOT NULL,	
	data_nascimento DATE NOT NULL,
	id_cidade INT NOT NULL,
	primary key (id_funcionario),
	foreign key(id_cidade) references cidades(id_cidade)

);	

/* Criacao da tabela de produtos */
CREATE TABLE produtos(
	id_produto int not null auto_increment,
	nome varchar(45) not null,
	quantidade int(4) not null,
	valor float(7,2) not null,
	descricao text,
	id_categoria int not null,
	primary key(id_produto),
	foreign key(id_categoria) references categorias(id_categoria)
);

/* Criacao da tabela de vendas */
CREATE TABLE vendas(
	id_venda int not null auto_increment,
	data_venda date not null,
	hora_venda time not null,
	total_venda float(8,2),
	total_recebido float(8,2),
	id_cliente int not null,
	primary key(id_venda),
	foreign key(id_cliente) references clientes(id_cliente)
);

/* Criacao da tabela de vendas_produtos */
CREATE TABLE vendas_produtos(
	id_venda_produto int not null auto_increment,
	id_produto int not null,
	id_venda int not null,
	quantidade int(4) not null,
	valor float(7,2) not null,
	primary key(id_venda_produto),
	foreign key(id_produto) references produtos(id_produto)
	,
	foreign key(id_venda) references vendas(id_venda)
);

/* Verificar tabelas criadas */
show tables;

INSERT INTO cidades(nome) values("Florianopolis"), ("Tijucas"), ("Palhoça");

/* Inserindo informacoes em clientes` */
INSERT INTO 
	clientes(nome, data_nascimento, renda, dependentes, id_cidade)
VALUES
	("Joao", "1990-05-11", 1200.57, 0, 1),
	("Pedro", "1995-10-01", 1100.00, 1, 1),
	("Felipe", "1992-01-20", 900.00, 5, 2);
/* teste do insert */
SELECT * FROM clientes;
	
/* Inserindo categorias */	
INSERT INTO categorias(nome) VALUES ("Alimentos"), ("Bebidas"), ("Outros");

/* Inserindo produtos */
INSERT INTO 
	produtos(nome, quantidade, valor, descricao, id_categoria)
VALUES
	("Feijao Caldao", 10, 2.50, "Feijao Branco", 1),
	("Feijao Baschiroto", 10, 3.50, "Feijao Preto", 1),
	("Coca-cola 2L", 10, 5.00, null, 2),
	("Carvao", 10, 7.50, "Carvao Vegetal", 3);
	
/* Inserindo uma venda para o cliente joao */
INSERT INTO 
	vendas(data_venda, hora_venda, id_cliente)
VALUES( curdate(), curtime(), 1 );

/* Inserindo produtos para venda 1 */
INSERT INTO 
	vendas_produtos(id_venda, id_produto, quantidade, valor)
VALUES
	(1, 1, 2, 2.50 ),
	(1, 3, 1, 5.00 ),
	(1, 4, 1, 7.50 );

/* Selecionar os produtos comprados na venda 1 com subtotal */
SELECT
	c.nome AS categoria, p.nome AS produto, 
	vp.valor, vp.quantidade, 
	(vp.valor*vp.quantidade) AS subtotal
FROM
	vendas_produtos vp
INNER JOIN
	produtos p ON vp.id_produto=p.id_produto
INNER JOIN
	categorias c ON p.id_categoria=c.id_categoria
WHERE
	vp.id_venda=1;
	
/* SELECIONAR O TOTAL DA VENDA */
SELECT
	sum(valor*quantidade) AS total
FROM
	vendas_produtos
WHERE
	id_venda=1;
	
/* atualizando a venda */
UPDATE
	vendas v
SET
	total_venda = ( SELECT
						sum(valor*quantidade) AS total
					FROM
						vendas_produtos
					WHERE
						id_venda=v.id_venda )
WHERE
	v.id_venda=1;
	
/* selcionando venda 1*/
SELECT 
	total_venda 
FROM
	vendas
WHERE
	id_venda=1;












