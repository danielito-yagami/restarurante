/*
Consultar todos
*/

delimiter $$
DROP PROCEDURE IF EXISTS getMensajes $$
CREATE PROCEDURE getMensajes()
BEGIN

SELECT m.idMensaje, p.nombre, p.email, m.mensaje FROM Mensajes as m 
INNER JOIN Personas as p ON (m.idPersona = p.idPersona);

END $$

CALL getMensajes();

/*
Consultar por id 
*/

delimiter $$
DROP PROCEDURE IF EXISTS getMensaje $$
CREATE PROCEDURE getMensaje(IN id INT)
BEGIN

SELECT m.idMensaje, p.nombre, p.email, m.mensaje FROM Mensajes as m 
INNER JOIN Personas as p ON (m.idPersona = p.idPersona)
WHERE idMensaje = id;

END $$

CALL getMensaje(2);


/*
Borrar mensaje

*/

delimiter $$
DROP PROCEDURE IF EXISTS borrarMensaje $$
CREATE PROCEDURE borrarMensaje(IN id INT)
BEGIN

declare idAux INT;

IF (SELECT p.idPersona FROM Personas as p INNER JOIN Mensajes as m ON(m.idPersona = p.idPersona)
WHERE m.idMensaje = id)

THEN
SET FOREIGN_KEY_CHECKS = 0;
SET idAux = (SELECT p.idPersona FROM Personas as p INNER JOIN Mensajes as m ON(m.idPersona = p.idPersona)
WHERE m.idMensaje = id);

DELETE FROM Personas
WHERE idPersona = idAux;

DELETE FROM Mensajes
WHERE idMensaje = id;

END IF;

END $$

CALL borrarMensaje(4);


/*
Insertar mensaje
*/


delimiter $$
DROP PROCEDURE IF EXISTS insertMensaje $$
CREATE PROCEDURE insertMensaje(IN nombrex VARCHAR(100), IN emailx VARCHAR(255),IN mensajex VARCHAR(255))
BEGIN

declare idAux INT;

INSERT INTO Personas(nombre, email)
values(nombrex, emailx);

SET idAux = (SELECT MAX(idPersona) FROM Personas);

INSERT INTO Mensajes(mensaje, idPersona)
VALUES(mensajex,idAux);

END $$

CALL insertMensaje('Daniel', 'daniel@gmail.com', 'Buenas tardes aceptan paypal?');