

CREATE DATABASE restaurante;


use restaurante;


CREATE TABLE banners(

idBanners int primary key auto_increment, 
titulo varchar(50),
descripcion varchar(50),
link varchar(255)

);

CREATE TABLE Chefs(

idChef int primary key auto_increment,
img varchar(255),
descripcion varchar(100), 
linkInsta varchar(100),
linkLink varchar(100),
linkFace varchar(100),
idPersona int,
foreign key(idPersona) REFERENCES Personas(idPersona)
);

CREATE TABLE Testimonios(

idComentario int primary key auto_increment,
comentario varchar(255),
idPersona int,
foreign key(IdPersona) REFERENCES Personas(idPersona)
);


CREATE TABLE Personas(
idPersona int primary key auto_increment,
nombre varchar(100) NOT NULL,
apPaterno varchar(100),
apMaterno varchar(100),
email varchar(255)

);


CREATE TABLE Comidas(

idComida int primary key auto_increment,
nombre varchar(100),
ingredientes varchar(255),
foto varchar(255),
precio decimal(8,2)
);
/*
Alter table Personas
add column email varchar(255);
*/
/*
Alter table Testimonios
drop column nombre;
*/
CREATE TABLE Mensajes(
idMensaje int primary key auto_increment,
mensaje varchar(255),
idPersona int,
foreign key(idPersona) REFERENCES Personas(idPersona)

);
CREATE TABLE Usuarios(
idUsuario int primary key auto_increment,
idPersona int,
contrasena varchar(255),
idTipo int,
foreign key(idPersona) REFERENCES Personas(idPersona),
foreign key(idTipo) REFERENCES catalogoUsuarios(idTipo)
);


/*
drop table Testimonios;
*/


CREATE TABLE catalogoUsuarios(

idTipo INT primary key auto_increment,
rol varchar(255)
);

