INSERT INTO
  type_processeurs(constructeur, socket)
VALUES
  ("Intel", "Intel 1700"),
  ("AMD", "AMD AMD4");

INSERT INTO
  type_ram(type_ram, frequence_ram, capacite_ram)
VALUES
  ("DDR3", 1600, 8),
  ("DDR4", 2666, 16),
  ("DDR4", 3200, 32),
  ("DDR3", 2400, 8);

INSERT INTO
  type_cartes_graphiques(modele, constructeur, taille_memoire_vive)
VALUES
  ("RTX 3090", "Nvidia", 12),
  ("GTX 1660 TI", "Nvidia", 8),
  ("Radeon RX 6700 XT", "AMD", 12),
  ("Radeon RX 6600", "AMD", 8);

INSERT INTO
  type_cartes_mere(format_carte_mere)
VALUES
  ("ATX"),
  ("mini ATX"),
  ("barebone");

INSERT INTO
  type_boitiers(type_boitier, id_type_carte_mere)
VALUES
  ("tour", 1),
  ("mini tour", 2),
  ("barebone", 3);

INSERT INTO
  connecteurs(nom_connecteur)
VALUES
  ("SATA"),
  ("M2"),
  ("U2 PCIe");

INSERT INTO
  type_disques(type, capacité, id_connecteur)
VALUES
  ("HDD", 2048, 1),
  ("HDD", 1536, 1),
  ("SSD", 500, 2),
  ("SSD", 750, 2),
  ("SDD", 1024, 3),
  ("SDD", 1536, 3);