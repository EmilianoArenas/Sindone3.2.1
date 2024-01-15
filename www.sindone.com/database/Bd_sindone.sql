CREATE TABLE tb_usuarios(
    id_usuario              INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres                 VARCHAR (100) NOT NULL,
    apellidos               VARCHAR (100) NOT NULL,
    email                   VARCHAR (100) NOT NULL,
    password                TEXT NOT NULL
);
