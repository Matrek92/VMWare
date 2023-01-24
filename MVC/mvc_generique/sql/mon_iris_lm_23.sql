drop database if exists nom_iris_lm_23;
create database mon_iris_lm_23;
use mon_iris_lm_23;

	create table classe(
		idclasse int(3) not null auto_increment,
		nom varchar(50),
		salle varchar(50),
		diplome varchar(50),
		primary key(idclasse)
		);
	create table etudiant(
		idetudiant int(3) not null auto_increment,
		nom varchar(50),
		prenom varchar(50),
		email varchar(50),
		idclasse int(3) not null,
		primary key(idetudiant),
		foreign key(idclasse) references classe(idclasse)
		);
	create table professeur(
		idprofesseur int(3) not null auto_increment,
		nom varchar(50),
		prenom varchar(50),
		diplome varchar(50),
		primary key(idprofesseur)
		);
	create table enseignement(
		idenseignement int(3) not null auto_increment,
		matiere varchar(50),
		nbheures int(3),
		coeff int(2),
		idclasse int(3) not null,
		idprofesseur int(3) not null,
		primary key(idenseignement),
		foreign key(idclasse) references classe(idclasse),
		foreign key(idprofesseur) references professeur(idprofesseur)
		);

	insert into classe values
		(null, "BTS LM", "Salle 3.10", "BTS SIO"),
		(null, "BTS JV", "Salle 3.8", "BTS SIO");

	insert into etudiant values
		(null, "Nael", "Clara", "a@gmail.com", 1),
		(null, "Prince", "Vallentin", "b@gmail.com", 2);
	insert into professeur values
		(null, "ben", "oka", "bac"),
		(null, "Chouaky", "Abdel", "bac");

	insert into enseignement values
		(null, "Java", 120, 4, 1, 1),
		(null, "BDD", 100, 2, 1, 2);

	create table user(
		iduser int (3) not null auto_increment,
		nom varchar(30),
		prenom varchar(30),
		email varchar(100),
		mdp varchar(100),
		role enum("admin", "user"),
		primary key(iduser));

	insert into user values 
	(null, "Vallentin", "Quentin", "a@gmail.com", "123", "admin"),
	(null, "Prince", "Clara", "b@gmail.com", "456", "user");



	#mise à jour des mots de passe en MD5
	update user set mdp = md5(mdp);

	update user set mdp = "123" where iduser=1;
	update user set mdp = "456" where iduser=2;

	# mise à jour des mots de passe en sha1
	update user set mdp = sha1(mdp);

	# grain de sel

	create table grainSel(
		nb varchar (100) not null primary key);

	insert into grainSel values ("121328647926357");

	# a chaque insertion dans la table user on applique le grain de sel.

	drop trigger if exists insertUser;
	delimiter $
	create trigger insertUser before insert on user for each row 
		begin
		declare nbSel varchar (100);
		select nb into nbSel from grainSel;

		set new.mdp = sha1(concat(new.mdp, nbSel));

	end $
	delimiter ;


	insert into user values 
	(null, "Vallentin", "Quentin", "a@gmail.com", "123", "admin"),
	(null, "Prince", "Clara", "b@gmail.com", "456", "user");

	# Historiser les mdp

	create table historique(
		idhisto int(5) not null auto_increment,
		mdp varchar(255),
		iduser int(3) not null,
		primary key (idhisto),
		foreign key (iduser) references user(iduser)
	);

	drop trigger if exists updateUser;
	delimiter $
	create trigger updateUser before update on user for each row
		begin 
		declare nbSel varchar (100);
		select nb into nbSel from grainSel;
		if old.mdp != new.mdp then
		set new.mdp = sha1(concat(new.mdp, nbSel));
		insert into historique values (null, old.mdp, old.iduser);
			end if;
	end $
	delimiter ;

	update user set mdp = "345" where iduser = 5;

	# vérification de la date mdp
	alter table user add dateMdp date ;

	update user set dateMdp="2022-11-1";

