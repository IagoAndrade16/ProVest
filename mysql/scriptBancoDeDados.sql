CREATE TABLE cursos (
	codC INT NOT NULL AUTO_INCREMENT,
    codU INT NOT NULL,
	categoria TEXT NOT NULL,
	nome varchar(255) NOT NULL,
	estados varchar(255),
	cidadeC TEXT,
	endereçoC TEXT,
	telefC varchar(255),
	celularC varchar(255),
	fotoPerfilC varchar(100),
	tipoEnsino varchar(255) NOT NULL,
	descricao TEXT NOT NULL,
	PRIMARY KEY(codC)
	    
);

CREATE TABLE usuarios (
	codU INT(11) NOT NULL AUTO_INCREMENT,
	senhaU varchar(255) NOT NULL,
	nomeU varchar(255) NOT NULL,
	estadoU varchar(255) NOT NULL,
	emailU varchar(255) NOT NULL,
	cidadeU varchar(255) NOT NULL,
	checkout varchar(4) NOT NULL,
	imgU varchar(100),
	PRIMARY KEY (codU)
	
);
ALTER TABLE cursos ADD CONSTRAINT usuarios_fk0 FOREIGN KEY (codU) REFERENCES usuarios(codU) ON DELETE CASCADE;