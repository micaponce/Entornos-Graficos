CREATE DATABASE Capitales;

USE Capitales;

CREATE TABLE ciudades(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ciudad VARCHAR(50),
    pais VARCHAR(50),
    habitantes INT,
    superficie DECIMAL(10,2),
    tieneMetro TINYINT(1)
);

INSERT INTO ciudades
(ciudad,pais,habitantes,superficie,tieneMetro)
VALUES
('Buenos Aires','Argentina',3000000,203.3,1),
('Rosario','Argentina',1000000,178.6,0),
('Santiago','Chile',5600000,641.4,1);

select * from ciudades;