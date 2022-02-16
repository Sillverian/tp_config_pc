CREATE TABLE type_processeurs(
   id_type_proc INT AUTO_INCREMENT,
   constructeur VARCHAR(50) NOT NULL,
   socket VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_type_proc)
);

CREATE TABLE type_RAM(
   id_type_ram INT AUTO_INCREMENT,
   type VARCHAR(50) NOT NULL,
   frequence_ram INT NOT NULL,
   capacite_ram INT NOT NULL,
   PRIMARY KEY(id_type_ram)
);

CREATE TABLE type_cartes_graphiques(
   id_type_carte_graphique INT AUTO_INCREMENT,
   modele VARCHAR(50) NOT NULL,
   constructeur VARCHAR(50) NOT NULL,
   taille_memoire_vive VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_type_carte_graphique)
);

CREATE TABLE cartes_graphiques(
   id_carte_graphique INT AUTO_INCREMENT,
   marque VARCHAR(50) NOT NULL,
   nom_produit VARCHAR(50) NOT NULL,
   prix DECIMAL(6,2) NOT NULL,
   id_type_carte_graphique INT NOT NULL,
   PRIMARY KEY(id_carte_graphique),
   FOREIGN KEY(id_type_carte_graphique) REFERENCES type_cartes_graphiques(id_type_carte_graphique)
);

CREATE TABLE type_cartes_mere(
   id_type_carte_mere INT AUTO_INCREMENT,
   format_carte_mere VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_type_carte_mere)
);

CREATE TABLE processeurs(
   id_processeur INT AUTO_INCREMENT,
   nom_produit VARCHAR(50) NOT NULL,
   prix DECIMAL(6,2) NOT NULL,
   id_type_proc INT NOT NULL,
   PRIMARY KEY(id_processeur),
   FOREIGN KEY(id_type_proc) REFERENCES type_processeurs(id_type_proc)
);

CREATE TABLE RAM(
   id_ram INT AUTO_INCREMENT,
   marque VARCHAR(50) NOT NULL,
   nom_produit VARCHAR(50) NOT NULL,
   prix DECIMAL(6,2) NOT NULL,
   id_type_ram INT NOT NULL,
   PRIMARY KEY(id_ram),
   FOREIGN KEY(id_type_ram) REFERENCES type_RAM(id_type_ram)
);

CREATE TABLE utilisateurs(
   id_utilisateur INT AUTO_INCREMENT,
   nom_utilisateur VARCHAR(50) NOT NULL,
   mot_de_passe_utilisateur VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_utilisateur)
);

CREATE TABLE connecteurs(
   id_connecteur INT AUTO_INCREMENT,
   nom_connecteur VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_connecteur)
);

CREATE TABLE type_boitiers(
   id_type_boitier INT AUTO_INCREMENT,
   type_boitier VARCHAR(50) NOT NULL,
   id_type_carte_mere INT,
   PRIMARY KEY(id_type_boitier),
   FOREIGN KEY(id_type_carte_mere) REFERENCES type_cartes_mere(id_type_carte_mere)
);

CREATE TABLE cartes_meres(
   id_carte_mere INT AUTO_INCREMENT,
   marque VARCHAR(50) NOT NULL,
   nom_produit VARCHAR(50) NOT NULL,
   prix DECIMAL(6,2) NOT NULL,
   id_type_carte_mere INT NOT NULL,
   PRIMARY KEY(id_carte_mere),
   FOREIGN KEY(id_type_carte_mere) REFERENCES type_cartes_mere(id_type_carte_mere)
);

CREATE TABLE type_disques(
   id_type_disque INT AUTO_INCREMENT,
   type VARCHAR(50) NOT NULL,
   capacité INT NOT NULL,
   id_connecteur INT NOT NULL,
   PRIMARY KEY(id_type_disque),
   FOREIGN KEY(id_connecteur) REFERENCES connecteurs(id_connecteur)
);

CREATE TABLE disques(
   id_disque INT AUTO_INCREMENT,
   marque VARCHAR(50) NOT NULL,
   nom_produit VARCHAR(50) NOT NULL,
   prix DECIMAL(6,2) NOT NULL,
   id_type_disque INT NOT NULL,
   PRIMARY KEY(id_disque),
   FOREIGN KEY(id_type_disque) REFERENCES type_disques(id_type_disque)
);

CREATE TABLE boitiers(
   id_boitiers INT AUTO_INCREMENT,
   marque VARCHAR(50) NOT NULL,
   nom_produit VARCHAR(50) NOT NULL,
   prix DECIMAL(6,2) NOT NULL,
   id_type_boitier INT NOT NULL,
   PRIMARY KEY(id_boitiers),
   FOREIGN KEY(id_type_boitier) REFERENCES type_boitiers(id_type_boitier)
);

CREATE TABLE configurations(
   id_configuration INT AUTO_INCREMENT,
   nom_config VARCHAR(50) NOT NULL,
   id_carte_mere INT NOT NULL,
   id_boitiers INT NOT NULL,
   id_processeur INT NOT NULL,
   id_carte_graphique INT NOT NULL,
   id_utilisateur INT NOT NULL,
   PRIMARY KEY(id_configuration),
   FOREIGN KEY(id_carte_mere) REFERENCES cartes_meres(id_carte_mere),
   FOREIGN KEY(id_boitiers) REFERENCES boitiers(id_boitiers),
   FOREIGN KEY(id_processeur) REFERENCES processeurs(id_processeur),
   FOREIGN KEY(id_carte_graphique) REFERENCES cartes_graphiques(id_carte_graphique),
   FOREIGN KEY(id_utilisateur) REFERENCES utilisateurs(id_utilisateur)
);

CREATE TABLE compa_mere_proc(
   id_type_proc INT,
   id_type_carte_mere INT,
   PRIMARY KEY(id_type_proc, id_type_carte_mere),
   FOREIGN KEY(id_type_proc) REFERENCES type_processeurs(id_type_proc),
   FOREIGN KEY(id_type_carte_mere) REFERENCES type_cartes_mere(id_type_carte_mere)
);

CREATE TABLE compa_mere_disque(
   id_type_disque INT,
   id_type_carte_mere INT,
   PRIMARY KEY(id_type_disque, id_type_carte_mere),
   FOREIGN KEY(id_type_disque) REFERENCES type_disques(id_type_disque),
   FOREIGN KEY(id_type_carte_mere) REFERENCES type_cartes_mere(id_type_carte_mere)
);

CREATE TABLE compa_mere_graphique(
   id_type_carte_graphique INT,
   id_type_carte_mere INT,
   PRIMARY KEY(id_type_carte_graphique, id_type_carte_mere),
   FOREIGN KEY(id_type_carte_graphique) REFERENCES type_cartes_graphiques(id_type_carte_graphique),
   FOREIGN KEY(id_type_carte_mere) REFERENCES type_cartes_mere(id_type_carte_mere)
);

CREATE TABLE compa_mere_ram(
   id_type_ram INT,
   id_type_carte_mere INT,
   PRIMARY KEY(id_type_ram, id_type_carte_mere),
   FOREIGN KEY(id_type_ram) REFERENCES type_RAM(id_type_ram),
   FOREIGN KEY(id_type_carte_mere) REFERENCES type_cartes_mere(id_type_carte_mere)
);

CREATE TABLE config_ram(
   id_ram INT,
   id_configuration INT,
   quantité INT NOT NULL,
   PRIMARY KEY(id_ram, id_configuration),
   FOREIGN KEY(id_ram) REFERENCES RAM(id_ram),
   FOREIGN KEY(id_configuration) REFERENCES configurations(id_configuration)
);

CREATE TABLE config_disque(
   id_disque INT,
   id_configuration INT,
   quantite INT NOT NULL,
   PRIMARY KEY(id_disque, id_configuration),
   FOREIGN KEY(id_disque) REFERENCES disques(id_disque),
   FOREIGN KEY(id_configuration) REFERENCES configurations(id_configuration)
);

CREATE TABLE carte_mere_connecteurs(
   id_type_carte_mere INT,
   id_connecteur INT,
   nombre INT NOT NULL,
   PRIMARY KEY(id_type_carte_mere, id_connecteur),
   FOREIGN KEY(id_type_carte_mere) REFERENCES type_cartes_mere(id_type_carte_mere),
   FOREIGN KEY(id_connecteur) REFERENCES connecteurs(id_connecteur)
);
