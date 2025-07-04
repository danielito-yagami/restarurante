
delimiter $$

DROP PROCEDURE IF EXISTS consultaCHEFS $$

CREATE PROCEDURE consultaCHEFS()

BEGIN 

SELECT c.idChef, CONCAT_WS(' ',p.nombre,p.apPaterno,p.apMaterno) as nombreC, c.img, c.descripcion, p.email, c.linkInsta, c.linkLink, c.linkFace 
FROM Personas as p 
INNER JOIN Chefs as c ON(p.idPersona = c.idPersona) 
WHERE c.idChef IS NOT NULL; 


END $$

CALL consultaCHEFS();

/*Consultar Chefs*/


/**

Store procedure para insertar actualizado para 
cuando no se especifique la foto

*/


delimiter $$

DROP PROCEDURE IF EXISTS insertarCHEF $$

CREATE PROCEDURE insertarCHEF(

IN nombreC VARCHAR(100),
IN apPaternoC VARCHAR(100),
IN apMaternoC VARCHAR(100),
IN emailC VARCHAR(255),
IN imgC VARCHAR(255),
IN descripcionC VARCHAR(255),
IN linkedinX VARCHAR(255),
IN instagramX VARCHAR(255),
IN facebookX VARCHAR(255)
)

BEGIN 

DECLARE controlX, idAux INT;


if (SELECT COUNT(idPersona) FROM Personas WHERE (nombre = nombreC AND apPaterno = apPaternoC AND email = emailC))

THEN

SELECT 'Ya esta registrado el colaborador' as RES;

ELSE 

INSERT INTO Personas(nombre, apPaterno, apMaterno, email)
values(nombreC, apPaternoC, apMaternoC, emailC); 

SET controlX = (SELECT COUNT(idPersona) FROM Personas WHERE (nombre = nombreC AND apPaterno = apPaternoC AND email = emailC)); 

IF (controlX !=1 OR controlX = 0)
THEN

SELECT 'Ya existe el registro' as RES;

ELSE

SET idAux = (SELECT (idPersona) FROM Personas WHERE email = emailC AND nombre = nombreC AND apMaterno = apMaternoC);

INSERT INTO Chefs(idPersona, img, descripcion, linkInsta, linkLink, linkFace)
values(idAux, imgC, descripcionC, instagramX, linkedinX, facebookX);

END IF;

END IF;

END $$


SELECT COUNT(idPersona) FROM personas WHERE email = 'juanpg@gmail' AND nombre = 'Garcia' AND apPaterno = 'Perez';

CALL insertarCHEF('Juan', 'Perez', 'Garcia', 'juanpg@gmail','foto.jpg','Chef de prueba','link1','link2','link3');


/*SP para borrar los colaboradores */






/***

delimiter $$


delimiter $$

DROP PROCEDURE IF EXISTS procedimiento $$

CREATE PROCEDURE procedimiento(IN numero decimal(5,5), IN numero2 decimal(5,5))

BEGIN

DECLARE numeroX, numeroY decimal(5,5);

IF numero > 20 THEN

SET numeroX = numero + numero2;
SELECT numeroX;
ELSE 

SET numeroY = numero * numero2;

SELECT numeroY;

END IF;

END $$





*/
/*Borrar registro**/


delimiter $$

DROP PROCEDURE IF EXISTS borrraC $$

CREATE PROCEDURE borrarC(IN idchefx INT)

BEGIN

DECLARE idAux INT;

IF(SELECT idChef FROM Chefs WHERE idChef = idchefx)

THEN
SET FOREIGN_KEY_CHECKS = 0;
SET idAux = (SELECT p.idPersona FROM Personas as p 
             INNER JOIN Chefs as c ON p.idPersona = c.idPersona WHERE c.idChef = idchefx);
             
             
DELETE FROM Personas WHERE idPersona = idAux;             

DELETE FROM Chefs WHERE idChef = idchefx;

ELSE 

SELECT 'EL id del chef no existe' as RES;

END IF;

END $$
CALL borrarC(1);

/*SP de actualizar un chef*/


delimiter $$

DROP PROCEDURE IF EXISTS actualizarC $$

CREATE PROCEDURE actualizarC(IN idchefx INT, 
IN nombrex VARCHAR(100), 
IN apPaternox VARCHAR(100),
IN apMaternox VARCHAR(100),
IN emailx VARCHAR(255),
IN imgx VARCHAR(255),
IN descripcionx VARCHAR(255),
IN instagramx VARCHAR(255),
IN facebookx VARCHAR(255),
IN linkedinx VARCHAR(255))

BEGIN

DECLARE idAux INT;

SET idAux = (SELECT p.idPersona FROM Personas as p
INNER JOIN Chefs as c ON p.idPersona = c.idPersona WHERE c.idChef = idchefx);

UPDATE Personas
SET nombre = nombrex, apPaterno = apPaternox, apMaterno = apMaternox, email = emailx
WHERE idPersona = idAux;


UPDATE Chefs 
SET img =imgx, descripcion = descripcionx, linkInsta = instagramx, linkFace = facebookx, linkLink = linkedinx
WHERE idChef = idchefx;


END $$

CALL actualizarC(5,'Loco', 'Capcom', 'Garcia', 'juanpg@gmail','foto.jpg','Chef de marvel','instagram','facebook','link3');


/*
Store procedure para consultar un registro de chef por id 
*/

delimiter $$

DROP PROCEDURE IF EXISTS consultaC $$

CREATE PROCEDURE consultaC(IN idchefx INT)

BEGIN 

SELECT c.idChef, CONCAT_WS(' ',p.nombre,p.apPaterno,p.apMaterno) as nombreC, c.img, c.descripcion, p.email, c.linkInsta, c.linkLink, c.linkFace 
FROM Personas as p 
INNER JOIN Chefs as c ON(p.idPersona = c.idPersona) 
WHERE c.idChef = idchefx; 


END $$
CALL consultaC(1);
/*

*/
DELIMITER $$

DROP PROCEDURE IF EXISTS consultaClimite $$

CREATE PROCEDURE consultaClimite()
BEGIN
    SELECT 
        c.idChef, 
        CONCAT_WS(' ', p.nombre, p.apPaterno, p.apMaterno) AS nombreC, 
        c.img, 
        c.descripcion, 
        p.email, 
        c.linkInsta, 
        c.linkLink, 
        c.linkFace
    FROM 
        Personas AS p
    INNER JOIN 
        Chefs AS c ON p.idPersona = c.idPersona
    ORDER BY 
        c.idChef DESC
    LIMIT 3;
END $$

DELIMITER ;