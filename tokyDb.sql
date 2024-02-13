
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

insert into the(nom,occupation_par_m2,rendement)
values('The1',1,10);

insert into the(nom,occupation_par_m2,rendement)
values('The2',54,101);

CREATE TABLE cueilleur (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(255),
  genre VARCHAR(10),
  dtn DATE
);


insert into cueilleur(nom,genre,dtn)
VALUES('C2','G','1999-10-11');

CREATE TABLE categorie_depense (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categorie VARCHAR(255) NOT NULL
);



CREATE TABLE config_salaire (
    valeur double
);

INSERT INTO config_salaire (valeur) VALUES (0);

create table sa_parcelles(
     id int primary key auto_increment,
     numero varchar(20),
     surface double,
     id_the int, foreign key(id_the) references the(id)
);

INSERT INTO sa_parcelles (numero, id_the,surface) VALUES 
('Parcelle1', 1,15.12);
INSERT INTO sa_parcelles (numero, id_the,surface) VALUES 
('Parcelle1', 2,150.12);


CREATE TABLE cueillette (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    id_cueilleur INT,
    id_parcelle INT,
    poids DOUBLE,
    FOREIGN KEY (id_cueilleur) REFERENCES cueilleur(id),
    FOREIGN KEY (id_parcelle) REFERENCES sa_parcelles(id)
) ;



insert INTO cueillette
(date,id_cueilleur,id_parcelle,poids)
values('2023-10-11',1,3,10);

insert INTO cueillette
(date,id_cueilleur,id_parcelle,poids)
values('2023-12-11',1,4,10);


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


create table MoisPoussee(
    idMois int
);

create table configCueilleur(
    id_cueilleur int,foreign key(id_cueilleur) references cueilleur(id),
    poidsMin DECIMAL(5,2),
    bonus DECIMAL(5,2),
    minus DECIMAL(5,2)
);

create table PrixVente(
    id_the int, foreign key(id_the) references the(id),
    prixVente DECIMAL(10,2)
);

create table cueilleurSalaire(
   id_cueilleur int, foreign key(id_cueilleur) references cueilleur(id),
    montant DECIMAL(10,2)
);

create table Vente(
    dateVente date,
    id_the int, foreign key(id_the) references the(id),
    montant DECIMAL(10,2)
);


insert into Vente values('2020-10-11',1,100000);
insert into Vente values('2020-12-11',1,200000);

insert into depense(date,montant) values('2020-12-11',200000);
insert into depense(date,montant)  values('2021-12-11',200000);

insert into cueilleurSalaire values(1,100000);

select sum(poids) as total_cueillette
from cueillette
WHERE date between '2022-11-10' and '2023-11-10';

select sum(montant) as recette 
from Vente
WHERE dateVente between '2018-11-10' and '2023-11-10';

select sum(montant) as recette 
from depense
WHERE dateVente between '2018-11-10' and '2023-11-10';

select sum(montant)-sum(montant) as recette 
from depense d 
join Vente v 
on 
WHERE dateVente between '2018-11-10' and '2023-11-10';


create or replace view v_details_paiement as
select nom,genre,montant,date,
CASE WHEN poids > poidsMin THEN (montant * bonus) / 100 
ELSE 0
END as bonus,
  CASE 
        WHEN poids <= poidsMin THEN (montant * minus) / 100 
        ELSE 0 
    END AS minus, 
    poids,poidsMin
from cueilleur c 
join configCueilleur co 
on c.id= co.id_cueilleur
join cueilleurSalaire cs
on cs.id_cueilleur = co.id_cueilleur
join cueillette cu 
on cu.id_cueilleur = co.id_cueilleur;

select * from v_details_paiement
WHERE date between '2022-11-10' and '2023-10-12';

select sum()


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


