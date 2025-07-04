

/*
Parte de los insert en colaboradores

**/

INSERT INTO personas(nombre,apPaterno,apMaterno,email)
values('Pedro','Ruiz','Inclan','pedro@gmail.com');

INSERT INTO chefs(img,descripcion,linkInsta,linkLink,linkFace,idPersona)
values('foto.jpg','El chef de comida picante','link de insta','link de linkedin','link de facebook',1);

/*Consulta usando JOIN INNER JOIN*/

SELECT p.nombre, p.apPaterno, p.email, c.idChef, c.img, c.descripcion 
FROM personas as p 
INNER JOIN chefs as c ON (p.idPersona = c.idPersona);


INSERT INTO comidas(nombre, ingredientes, foto, precio)
values('Hamburguesa doble','Carne de pollo, lechuga, queso blanco, aguacate y jitomate','foto.jpg',4.99);



INSERT INTO catalogoUsuarios( idTipo, rol)
values(1, 'Administrador'),
(2,'Colaborador');