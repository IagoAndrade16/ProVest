CREATE TABLE Autenticacao (
	email varchar(30) NOT NULL,
	PASSWORD varchar(16) NOT NULL,
	codL INT(11) NOT NULL,
	PRIMARY KEY (codL)
);

CREATE TABLE Cursos (
	codC INT(11) NOT NULL AUTO_INCREMENT,
	categoria TEXT NOT NULL,
	nome varchar(50) NOT NULL,
	estados varchar(255),
	e_mails varchar(30) NOT NULL,
	cidadeC TEXT,
	enderecoC TEXT,
	telefC varchar(15),
	celularC varchar(15),
	fotoPerfilC TEXT NOT NULL,
	codL INT(11) NOT NULL,
	tipoEnsino varchar(10) NOT NULL,
	descricao TEXT NOT NULL,
	PRIMARY KEY (codC)
);

CREATE TABLE Usuarios (
	codU INT(11) NOT NULL AUTO_INCREMENT,
	senhaU varchar(16) NOT NULL,
	nomeU varchar(40) NOT NULL,
	estadoU varchar(40) NOT NULL,
	emailU varchar(30) NOT NULL,
	cidadeU varchar(20) NOT NULL,
	codL INT(11) NOT NULL,
	PRIMARY KEY (codU)
);

ALTER TABLE Cursos ADD CONSTRAINT Cursos_fk0 FOREIGN KEY (codL) REFERENCES Autenticacao(codL);

ALTER TABLE Usuarios ADD CONSTRAINT Usuários_fk0 FOREIGN KEY (codL) REFERENCES Autenticacao(codL);