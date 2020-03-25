CREATE TABLE Usuario (
  idUsuario INT NOT NULL auto_increment,
  nome VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  uf VARCHAR(45) NOT NULL,
  cidade VARCHAR(45) NOT NULL,
  nacionalidade VARCHAR(45) NOT NULL,
  NomeImg varchar(45),
  CONSTRAINT pk_idUsuario_Usuario PRIMARY KEY (idUsuario)
);

 
INSERT INTO `usuario` (`idUsuario`, `nome`, `email`, `senha`, `uf`, `cidade`, `nacionalidade`, `NomeIMG´) VALUES
(1, 'Guilherme Olimpio dos Santos', 'gui@gmail.com', 'saopedro', '', 'Formiga', 'Brasileiro', 'bazar1.png'),
(2, 'Jhenifer Maria Cristina', 'j@gmail.com', 'saopedro', '', 'New York', 'Americano', 'bazar2.png');
