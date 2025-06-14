CREATE DATABASE VETERINARIA;
USE VETERINARIA;

CREATE TABLE PROPIETARIOS(
	ID			INT	AUTO_INCREMENT PRIMARY KEY,
    APELLIDOS	VARCHAR(40) NOT NULL,
    NOMBRES 	VARCHAR(40) NOT NULL
)ENGINE=INNODB;

CREATE TABLE MASCOTAS(
	ID				INT	AUTO_INCREMENT PRIMARY KEY,
    PROPIETARIO_ID	INT	NOT NULL,
    TIPO			VARCHAR(40) NOT NULL,
    NOMBRE			VARCHAR(40)	NOT NULL,
    COLOR			VARCHAR(40) NOT NULL,
    GENERO			ENUM('M','F') NOT NULL,
    ESTA_VIVO		BOOLEAN NOT NULL,
    CONSTRAINT FOREIGN KEY(PROPIETARIO_ID) REFERENCES PROPIETARIOS(ID)
)ENGINE=INNODB;

