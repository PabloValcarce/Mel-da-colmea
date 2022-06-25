create database tienda;
USE tienda;

create table usuarios
(
    id_clien int(8) auto_increment,
    username varchar(255) not null,
    pass varchar(10) not null,
    roll varchar(20)not null,
    email varchar(255) not null,
    primary key(id_clien)
);

create table productos
(
    id_producto int(8) auto_increment,
    produc_nombre varchar(50) not null,
    descripcion varchar(255) not null,
    produc_precio int(10) not null,
    imagen varchar(255)not null,
    primary key(id_producto)  
);
