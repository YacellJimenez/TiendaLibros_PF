
CREATE TABLE tb_usuarios(
	id_usuario			INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombres				VARCHAR (255) NOT NULL,
	apellidos			VARCHAR (255) NOT NULL,
	cd					VARCHAR (255) NOT NULL,
	celu				VARCHAR (255) NULL,
	cargo				VARCHAR (255) NOT NULL,
	email				VARCHAR (255) NOT NULL,
	password			TEXT NOT NULL,

	fyh_creacion		DATETIME		NULL,
	fyh_actualizacion	DATETIME		NULL,
	fyh_eliminacion		DATETIME		NULL,
	estado				VARCHAR (11)	NOT NULL
);