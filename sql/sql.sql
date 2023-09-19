create database crudphp1;
use crudphp1;

create table contactos(
id  int not null auto_increment,
nombre varchar(250) not null,
telefono varchar(100) not null,
fecha date not null,
primary key (id)
);
