
/*
Consulta de testimonios
*/


delimiter $$

DROP PROCEDURE IF EXISTS consultaT $$

CREATE PROCEDURE consultaT()
BEGIN 
SELECT t.idComentario, CONCAT_WS(' ',p.nombre, p.apPaterno, p.apMaterno) as nombreT, t.comentario 
from Personas as p INNER JOIN Testimonios as t ON (p.idPersona = t.idPersona);

END $$


CALL consultaT();

/*
Store Procedure insertar testimonios
*/


delimiter $$

DROP PROCEDURE IF EXISTS insertarT $$

CREATE PROCEDURE insertarT(IN nombrex varchar(100), IN ap varchar(100), IN am varchar(100), IN comentariox varchar(255))

BEGIN 

DECLARE idMaximo INT;

/*
declarando variables auxiliares
como aqui no importa que una persona si la misma persona da una reseña 2 veces se pueden tener 
mas de 1 registro con el mismo nombre, usando un innerjoin para consultas  

Primero se inserta en personas y despues usando MAX se usa una subconsulta para obtener el id 
maximo de personas que corresponde al id 
*/

INSERT INTO Personas(nombre,apPaterno, apMaterno, email)
values(nombrex,ap,am, '');

SET idMaximo = (SELECT idPersona FROM Personas WHERE idPersona = (SELECT MAX(idPersona) FROM Personas));

INSERT INTO Testimonios(comentario,idPersona)
values(comentariox, idMaximo);

END $$

CALL insertarT('Francisco', 'Montes', 'Segundo', 'Las hamrguesas saben muy bien');


/**
Borrando los datos 
*/

delimiter $$

DROP PROCEDURE IF EXISTS borrarT $$
CREATE PROCEDURE borrarT(IN id INT)

BEGIN

/*
quitando las restricciones para borrar 
*/
DECLARE idAuxiliar INT;
SET FOREIGN_KEY_CHECKS = 0;

SET idAuxiliar = (SELECT p.idPersona FROM Personas as p INNER JOIN Testimonios as t ON(p.idPersona = t.idPersona) WHERE idComentario = id);

if(idAuxiliar > 0 )
THEN
DELETE FROM Personas WHERE idPersona = idAuxiliar;
DELETE FROM Testimonios WHERE idComentario = id;
END IF;


END $$


/*
Store procedure para editar los testimonios
*/


delimiter $$

DROP PROCEDURE IF EXISTS editarT$$

CREATE PROCEDURE editarT(IN idT INT, IN nombrex varchar(100), IN ap varchar(100), IN am varchar(100), IN comentariox varchar(255))

BEGIN

DECLARE idPer INT;

/*
Quitando las restricciones 
*/
SET FOREIGN_KEY_CHECKS = 0;



/*
Para validar que existe el registro 
*/
if(SELECT p.idPersona FROM Personas as p INNER JOIN Testimonios as t ON(p.idPersona = t.idPersona) WHERE t.idComentario = idT )
THEN 

SET idPer = (SELECT p.idPersona FROM Personas as p INNER JOIN Testimonios as t ON(p.idPersona = t.idPersona) WHERE t.idComentario = idT);

SELECT idPer as id;

UPDATE Personas
SET nombre = nombrex, apPaterno = ap, apMaterno = am
WHERE idPersona = idPer;

UPDATE Testimonios
SET comentario = comentariox
WHERE idComentario = idT;
ELSE 

SELECT "No existe el id" as RES;

END IF;
END $$


CALL editarT(3,'', 'Pardo', '', 'Las mejores del centro');


/*
Store procedure para consultar de acuerco al ID
*/


delimiter $$

DROP PROCEDURE IF EXISTS consultaTid $$

CREATE PROCEDURE consultaTid(IN id INT)
BEGIN 
SELECT t.idComentario, CONCAT_WS(' ',p.nombre, p.apPaterno, p.apMaterno) as nombreT, t.comentario 
from Personas as p INNER JOIN Testimonios as t ON (p.idPersona = t.idPersona) WHERE t.idComentario = id;

END $$


CALL consultaTid(1);


/**

SP para consultar con limite Par de comentarios 
*/

delimiter $$

DROP PROCEDURE IF EXISTS consultaTLimite $$

CREATE PROCEDURE consultaTLimite()
BEGIN 
SELECT t.idComentario, CONCAT_WS(' ',p.nombre, p.apPaterno, p.apMaterno) as nombreT, t.comentario 
from Personas as p INNER JOIN Testimonios as t ON (p.idPersona = t.idPersona) ORDER BY t.idComentario DESC LIMIT 10;

END $$

