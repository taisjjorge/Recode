create database FullStackEletro;

use FullStackEletro;

create table if not exists Produtos(
		id integer primary key auto_increment,
		nome varchar(100), 
		descricao varchar(500), 
		preco decimal(6,2), 
		nome_imagem varchar(200)
    );
    
create table if not exists Pedidos(
		id integer primary key auto_increment,
        nome_cliente varchar(100),
		endereco varchar(200),
        telefone varchar(20),
        nome_prod varchar(100),
		valor_unit decimal(6,2),
        quantidade integer,
        valor_total decimal(6,2)
	);