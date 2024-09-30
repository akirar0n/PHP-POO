create database papelaria_php_pdo;

use papelaria_php_pdo;

create table produto(
idProduto int primary key auto_increment, 
produto varchar(45), 
valor decimal (4, 2),
qtd int
);