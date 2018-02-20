create database controle;

	use database controle;

	create table motoristas(
		id_motorista int primary key auto_increment,
		nome_m varchar(255) not null,
		data_nsc_m date not null,
		cpf_m varchar(15) not null,
		mod_carro varchar(30) not null,
		status char(1) not null
		);

	create table passageiros(
		id_passageiro int primary key auto_increment,
		nome_p varchar (255) not null,
		data_nsc_p date not null,
		cpf_p varchar (15) not null,
		sexo char(1) not null
		);

	create table corridas(
		id_corrida int primary key auto_increment,
		id_motorista int not null,
		id_passageiro int not null,
		valor_corrida float(10,2) not null
		);

	ALTER TABLE corridas ADD CONSTRAINT fk_motorista FOREIGN KEY ( id_motorista ) REFERENCES motoristas ( id_motorista ) ;
	ALTER TABLE corridas ADD CONSTRAINT fk_passageiro FOREIGN KEY ( id_passageiro ) REFERENCES passageiros ( id_passageiro ) ;
