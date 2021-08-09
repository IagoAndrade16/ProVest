CREATE TABLE cursos (
    codU INT NOT NULL,
	categoria TEXT NOT NULL,
	nome varchar(50) NOT NULL,
	estados varchar(255),
	e_mails varchar(30) NOT NULL,
	cidadeC TEXT,
	endereçoC TEXT,
	telefC varchar(15),
	celularC varchar(15),
	fotoPerfilC TEXT NOT NULL,
	tipoEnsino varchar(10) NOT NULL,
	descricao TEXT NOT NULL,
	PRIMARY KEY (codU)
    
);

CREATE TABLE usuarios (
	codU INT(11) NOT NULL AUTO_INCREMENT,
	senhaU varchar(16) NOT NULL,
	nomeU varchar(40) NOT NULL,
	estadoU varchar(40) NOT NULL,
	emailU varchar(30) NOT NULL,
	cidadeU varchar(20) NOT NULL,
	PRIMARY KEY (codU)
);
ALTER TABLE usuarios ADD CONSTRAINT usuarios_fk0 FOREIGN KEY (codU) REFERENCES cursos(codU);