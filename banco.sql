CREATE TABLE Usuario (
  idUsuario INT NOT NULL auto_increment,
  nome VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  uf VARCHAR(45) NOT NULL,
  cidade VARCHAR(45) NOT NULL,
  nacionalidade VARCHAR(45) NOT NULL,
  NomeImg varchar(45),
  descricao varchar(300),
  CONSTRAINT pk_idUsuario_Usuario PRIMARY KEY (idUsuario)
);

 


CREATE TABLE  Mensagens (
  idMensagens INT NOT NULL auto_increment,
  idRemetente INT NOT NULL,
  idDestinatario INT NULL,
  texto VARCHAR(255) NULL,
  data DATE NULL,
  horario TIME(0) NULL,
  CONSTRAINT pk_idMensagens PRIMARY KEY (idMensagens),
  CONSTRAINT fk_Mensagens_Usuario 
    FOREIGN KEY (idRemetente)
    REFERENCES Usuario (idUsuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

CREATE TABLE  Solicitacoes_de_Amizade (
  idAmizade INT NOT NULL auto_increment,
  idRemetente INT NOT NULL,
  idDestinatario INT NULL,
  status VARCHAR(45) NULL,
  CONSTRAINT pk_idAmizade PRIMARY KEY (idAmizade),
  CONSTRAINT fk_Solicitacoes_de_Amizade_Usuario1
    FOREIGN KEY (idRemetente)
    REFERENCES Usuario (idUsuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

CREATE TABLE  VideoCall (
  idVideoCall INT NOT NULL auto_increment,
  idRemetente INT NOT NULL,
  idDestinatario INT NULL,
  date DATE NULL,
  horario TIME(6) NULL,
  CONSTRAINT pk_idVideoCall PRIMARY KEY (idVideoCall),
  CONSTRAINT fk_VideoCall_Usuario1
    FOREIGN KEY (idRemetente)
    REFERENCES Usuario (idUsuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

