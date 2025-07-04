delimiter $$

DROP PROCEDURE IF EXISTS consultasU $$

CREATE PROCEDURE consultasU()
BEGIN 

SELECT u.idUsuario, concat_ws(" ",p.nombre,p.apPaterno,p.apMaterno) as nombre,p.email, u.contrasena, c.rol  FROM Usuarios as u 
INNER JOIN Personas as p ON (u.idPersona = p.idPersona) 
INNER JOIN catalogoUsuarios as c ON(u.idTipo = c.idTipo);  

END $$

CALL consultasU();


delimiter $$

DROP PROCEDURE IF EXISTS consultaU $$

CREATE PROCEDURE consultaU(IN id INT)
BEGIN 

SELECT u.idUsuario, concat_ws("",p.nombre,p.apPaterno,p.apMaterno) as nombre,p.email, u.contrasena, c.rol FROM usuarios as u 
INNER JOIN personas as p ON (u.idPersona = p.idPersona)
INNER JOIN catalogousuarios as c ON(u.idTipo = c.idTipo) 
WHERE idUsuario = id;
END $$

CALL consultaU(1);

delimiter $$

DROP PROCEDURE IF EXISTS insertarU $$

CREATE PROCEDURE insertarU(IN nombrex varchar(100),IN ap varchar(100),IN am varchar(100),IN emailx varchar(100),IN pass varchar(255),IN tipoU varchar(255))
BEGIN 

SELECT insertUser(nombrex,ap,am,emailx,pass,tipoU) as Resultado;

END $$


CALL insertarU('Lucas','De la Vega','Vaca','lucas88@gmail.com','1234','Administrador');


CALL insertarU('admin','apellido 1','apellido 2','correo@gmail.com','1234','Administrador');



delimiter $$

DROP PROCEDURE IF EXISTS consultaRol $$

CREATE PROCEDURE consultaRol()
BEGIN 

SELECT idTipo, rol from catalogoUsuarios;
  

END $$

CALL consultaRol();




delimiter $$

DROP PROCEDURE IF EXISTS borrarU $$

CREATE PROCEDURE borrarU(IN id INT)
BEGIN 
SET FOREIGN_KEY_CHECKS = 0;
SELECT borrarUsuario(id) as Resultado;

END $$

CALL borrarU(5);





delimiter $$

DROP PROCEDURE IF EXISTS loginX $$

CREATE PROCEDURE loginX(IN email varchar(255), IN pass varchar(255))
BEGIN 

SELECT login(email, pass) as Resultado;

END $$

CALL loginX('correo@gmail.com','1234');