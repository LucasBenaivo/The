--//mysql -u username -h 172.20.0.167 --port 3306 -p 
--ETU002566

--bgjbX1Gm8vlM

create database the

create table tea_admin(
    id int primary key auto_increment,
    nom varchar(100),
    mail varchar(100), 
    mdp varchar(50)
);
insert into tea_admin (nom,mail,mdp) values('admin','admin@gmail.com','admin');

CREATE TABLE the (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    occupation_par_m2 DECIMAL(10,  4) NOT NULL,
    rendement DECIMAL(10,  4) NOT NULL
);


CREATE TABLE cueilleur (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(255),
  genre VARCHAR(10),
  dtn DATE
);
-- 322

CREATE TABLE categorie_depense (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categorie VARCHAR(255) NOT NULL
);
-- 322depense;


CREATE TABLE config_salaire (
    valeur double
);

-- 322aire;
INSERT INTO config_salaire (valeur) VALUES (0);

create table sa_parcelles(
     id int primary key auto_increment,
     numero varchar(20),
     surface double,
     id_the int, foreign key(id_the) references the(id)
);
INSERT INTO sa_parcelles (numero, id_the,surface) VALUES 
('Parcelle1', 1,15.12);

-- 322es;

CREATE TABLE cueillette (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    id_cueilleur INT,
    id_parcelle INT,
    poids DOUBLE,
    FOREIGN KEY (id_cueilleur) REFERENCES cueilleur(id), -- Assurez-vous que la table cueilleurs existe avec une colonne 'id' comme clé primaire
    FOREIGN KEY (id_parcelle) REFERENCES sa_parcelles(id) -- Assurez-vous que la table parcelles existe avec une colonne 'id' comme clé primaire
) ;
-- 322;

CREATE TABLE depense (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    id_categorie_dep INT,
    montant DOUBLE,
    FOREIGN KEY (id_categorie_dep) REFERENCES categorie_depense(id) -- Assurez-vous que la table cueilleurs existe avec une colonne 'id' comme clé primaire
) ;

create table sa_client(
    id int primary key auto_increment,
    mail varchar(100),
    mdp varchar(100)
);
insert into sa_client (mail,mdp) values('utilisateur@gmail.com','utilisateur');

-- 322
create or replace view details_parcelle as 
select sp.id as id_parcelle,numero,nom,surface
from sa_parcelles sp 
join the t 
on sp.id_the = t.id;
----------------------------
INSERT INTO categorie_depense (categorie) VALUES ('Nouvelle Catégorie');
INSERT INTO the (nom, occupation_par_m2, rendement)
VALUES ('The vert',  123.45,  0.98);

UPDATE the
SET nom = 'New Name', occupation_par_m2 =  123.45, rendement =  0.98
WHERE id =  1; -- Replace  1 with the actual ID you want to update
INSERT INTO cueilleur (nom, genre, dtn)  
VALUES ('Jean Dupont', 'Homme', '1980-05-15');
UPDATE config_salaire set valeur=2;
INSERT INTO cueillette (date, id_cueilleur, id_parcelle, poids)
VALUES ('2024-02-12',  1,  101,  5.5);

-- ALTER TABLE the MODIFY nom VARCHAR(255) NOT NULL;
-- ALTER TABLE the ADD occupation_par_m2 DECIMAL(10,  4) NOT NULL;
-- ALTER TABLE the ADD rendement DECIMAL(10,  4) NOT NULL;


