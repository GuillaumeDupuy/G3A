CREATE DATABASE g3a;

CREATE TABLE membre
(
	id_membre INT NOT NULL,
	email VARCHAR(30) NOT NULL UNIQUE,
	mdp VARCHAR(30) NOT NULL,
	prenom VARCHAR(20) NOT NULL,
	nom VARCHAR(20) NOT NULL,
	dtn DATE NOT NULL,
	adresse VARCHAR(50),
	ville VARCHAR(30),
	code_postal NUM(5),
	soldes DEC(6,2) DEFAULT 0
)

CREATE TABLE produit
(
	id_produit INT NOT NULL,
	nom VARCHAR(40) NOT NUL,
	code_activ NUM(10) NOT NULL,
	prix DEC(6,2) NOT NULL,
	description VARCHAR(300),
	plateformes VARCHAR(100) NOT NULL,
	categorie VARCHAR(50) NOT NULL,
	note NUM(2),
	photo VARCHAR(100),
	quantite NUM(3)
)

CREATE TABLE avi
(
	id_avis INT NOT NULL,
	avi VARCHAR(300) NOT NULL,
	note NUM(2) NOT NULL,
	id_produit INT NOT NULL

)

CREATE TABLE commande
(
	num_commande INT NOT NULL,
	date_commande DATE NOT NULL,
	prix_total NUM(6,2) NOT NULL,
	status VARCHAR(30) NOT NULLT
	id_membre INT NOT NULL
)

CREATE TABLE detail_com
(
	num_commande INT NOT NULL,
	id_produit INT NOT NULL,
	quantite NUM(2) DEFAULT 1,
	prix_total NUM(3)
	
)

CREATE TABLE livraison
(
	mode_livraison VARCHAR(50) NOT NULL,
	date_livraison DATE NOT NULL,
	status vachar(30) NOT NULL,
	adresse_facturation VARCHAR(50) NOT NULL,
	num_commande INT NOT NULL
)

CREATE TABLE paiement
(
	id_paiement INT NOT NULL,
	mode paiement VARCHAR(20) NOT NULL,
	montant	DEC(6,2) NOT NULL,
	num_commande INT NOT NULL
)

CREATE TABLE carte
(
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(30) NOT NULL,
	numero NUM(16) NOT NULL,
	date DATE NOT NULL,
	crypto NUM(3) NOT NULL,
	id_membre INT NOT NULL
)
