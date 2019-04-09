# ProgramacionIII_2019
***guardar proyectos en C/XAMP/htdocs/
***iniciar siempre el xamp--> apache	
POSTMAN--> localhost:8080/EJ07_HERENCIA/EJ07_HERENCIA/index.php

cargar  un csv y  un  json. 

subir fotos--> agregar marca de agua php 
si ya existe la foto en la direccion que se quiere guardar, hacer una funcion para mover la foto anterior, agregarle mnarca de agua 
y  guardar en otra direccion. y guardar la nueva que queremos

**********************************************************clase Base de datos**************************************************

para las relaciones de muchos a muchos poner la tabla intermedia

Multiple insert:
	- insert ...(   ), (  ), ...

las sentencias delete y update si  no  ponemos el WHERE, estarìamos afectado  toda la tabla. (ojo)

INSERT INTO `materiaalumno`( `Cuatrimestre`, `IdAlumno`, `IdMateria`, `Nota`) VALUES 
("",1,1,7),
("",1,1,7),
("",1,1,7),
("",1,1,7)

INSERT INTO `alumno`(`Nombre`, `Edad`, `Documento`, `Legajo`, `IdLocalidad`) VALUES ("Gabriela",28,"13456","13465",3)

///
SELECT a.Nombre, l.Nombre

FROM alumno as a, localidad as l

WHERE a.IdLocalidad = l.Id
///

recordar para repasar, subir fotos
--
SELECT a.Nombre, l.Nombre, ma.Cuatrimestre, ma.Nota, m.Descripcion

FROM alumno as a, localidad as l, materiaalumno as ma, materia as m

WHERE a.IdLocalidad = l.Id and a.Id = ma.IdAlumno and m.Id = ma.IdMateria

--
SELECT sum( Nota) FROM `materiaalumno`
//suma el campo dado
--
SELECT a.Nombre, l.Nombre FROM alumno as a, localidad as l WHERE a.IdLocalidad = l.Id and l.Nombre = "La Plata"
--
SELECT count(a.Nombre) as cantidad
FROM alumno as a, localidad as l
WHERE a.IdLocalidad = l.Id and l.Nombre = "La Plata"
//trae la cantidad de registros con esa localidad

--
SELECT a.Nombre, am.Nota 
FROM materiaalumno as am, alumno as a WHERE am.IdAlumno = a.Id
BETWEEN 8 and 9
--
