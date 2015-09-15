CREATE DATABASE securityon;

USE securityon;

CREATE TABLE distribuidores(
cedula BIGINT,
nombre VARCHAR(50),
direccion VARCHAR(50),
PRIMARY KEY(cedula));

SELECT * FROM distribuidores;