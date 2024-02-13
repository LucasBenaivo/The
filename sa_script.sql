create database the;

create table tea_admin(
    id int primary key auto_increment,
    nom varchar(100),
    mail varchar(100), 
    mdp varchar(50)
);

create table the(
    id int primary key auto_increment,
    nom varchar(100)
);


create table sa_parcelles(
     id int primary key auto_increment,
     numero varchar(20),
     id_the int, foreign key(id_the) references the(id),
     surface decimal(10,2)
);

create table sa_client(
    id int primary key auto_increment,
    mail varchar(100),
    mdp varchar(100)
);

insert into sa_client (mail,mdp) values('utilisateur@gmail.com','utilisateur');

insert into tea_admin (nom,mail,mdp) values('admin','admin@gmail.com','admin');


insert into tea_admin (nom,mail,mdp) values('admin','admin@gmail.com','admin');

INSERT INTO the (nom) VALUES 
('The1'),
('The2'),
('The3');

-- Inserting test data into `parcelles`
INSERT INTO sa_parcelles (numero, id_the,surface) VALUES 
('Parcelle1', 1,15.12),



create or replace view details_parcelle as 
select sp.id as id_parcelle,numero,nom,surface
from sa_parcelles sp 
join the t 
on sp.id_the = t.id;

select * from details_parcelle where id_parcelle = 2;
