CREATE DATABASE santaart COLLATE utf8_unicode_ci;
USE santaart;
CREATE TABLE Tb_Cliente(
	 Id                    INT NOT NULL AUTO_INCREMENT PRIMARY KEY
    ,Email                 VARCHAR(100) NOT NULL
    ,Nome                  VARCHAR(100) NOT NULL
    ,Foto                  VARCHAR(850) NOT NULL
    ,Senha 				   VARCHAR(850) NOT NULL
    ,Online 			   BOOLEAN
    ,Cpf                   VARCHAR(30)
    ,Cep                   VARCHAR(30)
    ,Cnpj                  VARCHAR(30) 
    ,Endereco              VARCHAR(150)
    ,Cidade                VARCHAR(150)
    ,Telefone              VARCHAR(11)  

) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE Tb_Desenvolvedor(
	 Id                    INT NOT NULL AUTO_INCREMENT PRIMARY KEY
    ,Email                 VARCHAR(100) NOT NULL
    ,Nome                  VARCHAR(100) NOT NULL
    ,Foto                  VARCHAR(850) NOT NULL
    ,Senha 				   VARCHAR(850) NOT NULL
    ,Online 			   BOOLEAN
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE utf8_unicode_ci;
CREATE TABLE Tb_Chat(
	 Id                    		INT NOT NULL AUTO_INCREMENT PRIMARY KEY
	,IdCliente			   		INT NOT NULL 
    ,IdDesenvolvedor       		INT NOT NULL
    ,ClienteEscrevendo     		BOOLEAN
    ,DesenvolvedorEscrevendo	BOOLEAN
        ,FOREIGN KEY (IdCliente)       REFERENCES Tb_Cliente(Id)
        ,FOREIGN KEY (IdDesenvolvedor) REFERENCES Tb_Desenvolvedor(Id)
)ENGINE=InnoDB CHARACTER SET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE Tb_Mensagem(
	 Id                    INT NOT NULL AUTO_INCREMENT PRIMARY KEY
	,IdChat				   INT NOT NULL 
    ,Mensagem 			   VARCHAR(500) NOT NULL
    ,IdClienteEnvio	       INT 
    ,IdDesenvolvedorEnvio  INT 
		  ,FOREIGN KEY (IdChat) 		   		REFERENCES Tb_Chat(Id)
          ,FOREIGN KEY (IdClienteEnvio) 		REFERENCES Tb_Cliente(Id)
		  ,FOREIGN KEY (IdDesenvolvedorEnvio)   REFERENCES Tb_Desenvolvedor(Id)
)ENGINE=InnoDB CHARACTER SET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE Tb_StatusSite(
	 Id                    INT NOT NULL AUTO_INCREMENT PRIMARY KEY
	,Descricao   		   VARCHAR(100)
)ENGINE=InnoDB CHARACTER SET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO Tb_StatusSite(Descricao) VALUES('Em Análise');
INSERT INTO Tb_StatusSite(Descricao) VALUES('Aguardando Pagamento');
INSERT INTO Tb_StatusSite(Descricao) VALUES('Pagamento Confirmado');
INSERT INTO Tb_StatusSite(Descricao) VALUES('Projeto Entregue');
INSERT INTO Tb_StatusSite(Descricao) VALUES('Projeto Recusado');

CREATE TABLE Tb_Site(
	 Id                    INT NOT NULL AUTO_INCREMENT PRIMARY KEY
	,DataProposta		   DATE 
    ,DataConclusao		   DATE 
	,NomeSite			   VARCHAR(200) NOT NULL
	,IdStatusSite		   INT NOT NULL		
	,IdCliente			   INT NOT NULL
    ,ServicosPedidos      VARCHAR(200) NOT NULL
    ,MotivoSiteRecusado   VARCHAR(1000) 
		,FOREIGN KEY (IdStatusSite) REFERENCES Tb_StatusSite(Id)
        ,FOREIGN KEY (IdCliente)    REFERENCES Tb_Cliente(Id)
)ENGINE=InnoDB CHARACTER SET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE Tb_Site_Cliente(
	 Id                    INT NOT NULL AUTO_INCREMENT PRIMARY KEY
	,IdCliente			   INT NOT NULL
	,IdSite 			   INT NOT NULL
		,FOREIGN KEY (IdCliente) REFERENCES Tb_Cliente(Id)
        ,FOREIGN KEY (IdSite)	 REFERENCES Tb_Site(Id)
)ENGINE=InnoDB CHARACTER SET=utf8 COLLATE utf8_unicode_ci;











