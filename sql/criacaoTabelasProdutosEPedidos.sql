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

insert into produtos(nome, descricao, preco, imagem) values
    ('Nokia 6310i', 'Original desbloqueado', 39, 'img00.jpg'),
    ('Tijolão 3310','Nokia antigo', 39,'img01.jpg'),
	('Siemens A40','Celular da Xuxa', 49,'img02.jpg'),
    ('SonyEricsson W200','Clássico', 85,'img03.jpg'),
    ('Celular V3','Motorola antigo', 70,'img04.jpg'),
    ('StarTAC (1996)','Motorola antigo', 89,'img05.jpg'),
    ('SonyEricsson W380','Modelo antigo', 93,'img06.png'),
    ('C200 (2003)','Motorola antigo', 79,'img07.jpg'),
    ('Motorola Rokr E1 (2005)','Motorola antigo', 70,'img08.webp'),
    ('Celular Nokia 5200','Destaque entre os populares', 100,'img09.webp'),
    ('Motorola V7','Flip peculiar', 86,'img10.webp'),
    ('SonyEricsson W580i','Relíquia', 129,'img11.webp');
    
    select * from produtos;
    select * from pedidos;

    use fulleletronicos;

    create view nossosprodutos as
    select * from produtos;