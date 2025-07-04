delimiter $$
DROP PROCEDURE IF EXISTS qy $$

CREATE PROCEDURE qy()
BEGIN

SELECT idBanners, titulo, descripcion, link from banners ORDER BY idBanners DESC;

END $$

CALL qy();


INSERT INTO banners(titulo,descripcion,link)
values('Amburger','Hamburguersas deliciosas','#menu');


delimiter $$
DROP PROCEDURE IF EXISTS escribir $$

CREATE PROCEDURE escribir(IN titulox varchar(50),
IN descripcionx varchar(50),IN linkx varchar(255))

BEGIN

INSERT INTO banners(titulo, descripcion, link)
values(titulox, descripcionx,linkx);
END $$

CALL escribir('prueba 2 titulo', 'descripcion del banner','#pruebaX');




delimiter $$

DROP PROCEDURE IF EXISTS borrar $$

CREATE PROCEDURE borrar(IN id int)

BEGIN 

DELETE FROM banners WHERE idBanners = id;

END $$

CALL borrar(7);


delimiter $$

DROP PROCEDURE IF EXISTS editar $$

CREATE PROCEDURE editar(IN idx int,IN titulox varchar(50), IN descripcionx varchar(50), IN enlacex varchar(255))

BEGIN 

UPDATE banners
SET titulo = titulox,descripcion = descripcionx,link = enlacex
WHERE idBanners = idx;

END $$

CALL editar(2, 'Amburguer','Hamburguesas deliciosas','#menu');



delimiter $$

DROP PROCEDURE IF EXISTS consulta $$

CREATE PROCEDURE consulta(IN id int)

BEGIN 


SELECT idBanners, titulo, descripcion, link FROM banners WHERE idBanners = id;

END $$

CALL consulta(1);




delimiter $$

DROP PROCEDURE IF EXISTS consultaLimit $$

CREATE PROCEDURE consultaLimit()

BEGIN 

SELECT idBanners, titulo, descripcion, link FROM banners ORDER BY idBanners DESC LIMIT 1;


END $$


CALL consultaLimit();