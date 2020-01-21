create database crud;
use crud;
create table usuarios(id int not null AUTO_INCREMENT, nombres varchar(40), apelidos varchar(40), email varchar(40), pais varchar(2), contrasena varchar(20) , PRIMARY KEY (id));
