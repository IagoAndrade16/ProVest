CREATE TABLE cursos (
    codU INT NOT NULL,
	categoria TEXT NOT NULL,
	nome varchar(255) NOT NULL,
	estados varchar(255),
	e_mails varchar(255) NOT NULL,
	cidadeC TEXT,
	endereçoC TEXT,
	telefC varchar(255),
	celularC varchar(255),
	fotoPerfilC TEXT NOT NULL,
	tipoEnsino varchar(255) NOT NULL,
	descricao TEXT NOT NULL,
	PRIMARY KEY (codU)
    
);

CREATE TABLE usuarios (
	codU INT(11) NOT NULL AUTO_INCREMENT,
	senhaU varchar(255) NOT NULL,
	nomeU varchar(255) NOT NULL,
	estadoU varchar(255) NOT NULL,
	emailU varchar(255) NOT NULL,
	cidadeU varchar(255) NOT NULL,
	PRIMARY KEY (codU)
);
ALTER TABLE cursos ADD CONSTRAINT usuarios_fk0 FOREIGN KEY (codU) REFERENCES usuarios(codU);


/* Código SQL tela cadastro */
INSERT INTO usuarios(senhaU, nomeU, estadoU, emailU, cidadeU) VALUE('${senha_usuario}', '${nome_usuario}', '${estado_usuario}', '${email_usuario}', '${cidade_usuario}');

/* Código SQL tela login */
SELECT codU, estadoU, senhaU, emailU, nomeU, cidadeU FROM usuarios WHERE senhaU = '${senhaU}' and emailU = '${emailU}'

/* Código SQL tela perfil */
UPDATE usuarios SET nomeU = '$usuario' WHERE codU = $session