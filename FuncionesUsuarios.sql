
delimiter $$
DROP FUNCTION IF EXISTS insertUser $$
CREATE FUNCTION insertUser(nombrex varchar(100),
ap varchar(100),
am varchar(100),
emailx varchar(100),
pass varchar(255),
tipoU varchar(255))
RETURNS int
deterministic
BEGIN

DECLARE idA1 , idA2 , e , codigo INT;

SET e = (SELECT COUNT(email) from Personas WHERE email = emailx);
if(e > 0 )
THEN

SET codigo = 0;

RETURN codigo;

ELSE

INSERT INTO Personas(nombre, apPaterno, apMaterno, email)
values (nombrex, ap, am, emailx);

SET idA1 = (SELECT MAX(idPersona) from Personas);

if(SELECT MAX(idPersona) from Personas)

THEN

SET idA2 = (SELECT idTipo from catalogoUsuarios WHERE rol = tipoU);

INSERT INTO Usuarios(idPersona, contrasena, idTipo)
values(idA1, pass, idA2);

SET codigo = 1;
RETURN codigo;
ELSE

SET codigo = 3;
RETURN codigo;
END if;

END IF;


END $$





/*




*/

delimiter $$
DROP FUNCTION IF EXISTS borrarUsuario $$
CREATE FUNCTION borrarUsuario(id int)
RETURNS INT
DETERMINISTIC
BEGIN

DECLARE idAux, codigo int;

if((SELECT idUsuario FROM Usuarios WHERE idUsuario = id))
THEN

SET idAux = (SELECT p.idPersona FROM Personas as p INNER JOIN Usuarios as u ON (p.idPersona = u.idPersona) WHERE u.idUsuario = id);

DELETE FROM Personas WHERE idPersona = idAux;

DELETE FROM Usuarios WHERE idUsuario = id;

SET codigo = 0;

return codigo;

ELSE 

SET codigo = 1;

return codigo;

END IF;

END $$


/**

Login
*/

delimiter $$
DROP FUNCTION if exists login$$
CREATE FUNCTION login(emailx varchar(255), pass varchar(255))returns INT DETERMINISTIC
BEGIN

DECLARE idAux, codigo int;

SET idAux = (SELECT COUNT(u.idUsuario) as numero FROM Usuarios as u INNER JOIN Personas as p ON(u.idPersona = p.idPersona)
WHERE p.email = emailx AND u.contrasena = pass );

if(idAux = 1)
THEN

SET codigo = 0;

return codigo;

ELSE 
SET codigo = 1;

return codigo;
END IF;
END $$
