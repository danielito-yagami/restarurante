delimiter $$

DROP PROCEDURE IF EXISTS consultaComidas $$
CREATE PROCEDURE consultaComidas()
BEGIN

select idcomida, nombre, ingredientes, foto, precio from Comidas;

END $$


CALL consultaComidas();

delimiter $$

DROP PROCEDURE IF EXISTS consultaComida $$
CREATE PROCEDURE consultaComida(IN idx INT)
BEGIN

SELECT idcomida, nombre, ingredientes, foto, precio FROM Comidas
WHERE idcomida = idx;

END $$

CALL consultaComida(1);


delimiter $$

DROP PROCEDURE IF EXISTS consultaComidasL $$
CREATE PROCEDURE consultaComidasL()
BEGIN

SELECT idcomida, nombre, ingredientes, foto, precio FROM Comidas
ORDER BY idcomida DESC LIMIT 6;

END $$

CALL consultaComidasL();




delimiter $$

DROP PROCEDURE IF exists editarComida $$
CREATE PROCEDURE editarComida(IN idcomidax INT,IN nombrex varchar(100),IN ingredientesx varchar(255),IN fotox varchar(255),IN preciox decimal (8,2))
BEGIN

UPDATE Comidas 
SET nombre = nombrex, ingredientes = ingredientesx, foto = fotox, precio = preciox
WHERE idcomida = idcomidax;

END $$

CALL editarComida(2, 'Hamburguesa dax', 'Carne triple de res, salchicha, jitomate, queso, pina, peperoni', 'foto.jpg', 7.99);



select * from comidas;

delimiter $$

DROP PROCEDURE IF exists insertarComida $$
CREATE PROCEDURE insertarComida(IN nombrex varchar(100),IN ingredientesx varchar(255),IN fotox varchar(255),IN preciox decimal (8,2))
BEGIN

INSERT INTO Comidas(nombre, ingredientes, foto, precio)
values(nombrex, ingredientesx, fotox, preciox);

END $$

CALL insertarComida('Hamburguesa hawaiana pollo', 'Carne doble de pollo, salchicha, jitomate, queso, pina, peperoni', 'foto.jpg', 7.99);

delimiter $$

DROP PROCEDURE IF EXISTS borrarComida$$
CREATE PROCEDURE borrarComida(IN idx INT)
BEGIN

DELETE FROM Comidas 
WHERE idcomida = idx;

END $$




CALL borrarComida(5);