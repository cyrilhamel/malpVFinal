-- création de la base de donnée
create database MalpVFinal;
-- utilisation de la base de donnée
use MalpVFinal;
-- creation des tables dans la base de donnée


create table articles(
id_article int primary key auto_increment not null,
nom_article varchar(50),
texte_article varchar(50) not null,
)engine=innoDB;


create table ateliers(
id_atelier int primary key auto_increment not null,
nom_atelier varchar(50) not null,
descr_atelier text not null,
date_atelier datetime not null,
dateFin_atelier datetime not null,
places_atelier int not null,
prix_atelier int
)engine=innoDB;


create table produits(
    id_produit int primary key auto_increment not null,
    nom_produit varchar(50) not null,
    descr_produit text not null,
    prix_produit int not null
)engine=innoDB;






