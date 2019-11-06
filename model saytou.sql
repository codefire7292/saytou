/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  24/10/2019 09:48:01                      */
/*==============================================================*/


drop table if exists Administrateur;

drop table if exists Affectation;

drop table if exists Ajout;

drop table if exists Commanditaire;

drop table if exists Coordonateur;

drop table if exists Enquete;

drop table if exists Enqueter;

drop table if exists Enqueteur;

drop table if exists Etudiant;

drop table if exists Participation;

drop table if exists Personne;

drop table if exists Role;

drop table if exists Zone;

/*==============================================================*/
/* Table : Administrateur                                       */
/*==============================================================*/
create table Administrateur
(
   id                   int not null AUTO_INCREMENT,
   primary key (id)
);

/*==============================================================*/
/* Table : Affectation                                          */
/*==============================================================*/
create table Affectation
(
   Enq_id2              int not null,
   Zon_id               int not null,
   id                   int not null AUTO_INCREMENT,
   Enq_id               int not null,
   Coo_id               int not null,
   primary key (id)
);

/*==============================================================*/
/* Table : Ajout                                                */
/*==============================================================*/
create table Ajout
(
   Enq_id               int not null,
   Zon_id               int not null,
   id                   int not null AUTO_INCREMENT,
   Coo_id               int not null,
   primary key (id)
);

/*==============================================================*/
/* Table : Commanditaire                                        */
/*==============================================================*/
create table Commanditaire
(
   id                   int not null AUTO_INCREMENT,
   primary key (id)
);

/*==============================================================*/
/* Table : Coordonateur                                         */
/*==============================================================*/
create table Coordonateur
(
   id                   int not null AUTO_INCREMENT,
   primary key (id)
);

/*==============================================================*/
/* Table : Enquete                                              */
/*==============================================================*/
create table Enquete
(
   id                   int not null AUTO_INCREMENT,
   Com_id               int not null,
   Adm_id               int not null,
   nom                  varchar(254),
   debut                datetime,
   fin                  datetime,
   cout                 int,
   primary key (id)
);

/*==============================================================*/
/* Table : Enqueter                                             */
/*==============================================================*/
create table Enqueter
(
   Enq_id2              int not null,
   Etu_id               int not null,
   id                   int not null AUTO_INCREMENT,
   Enq_id               int not null,
   lieu_habite          varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table : Enqueteur                                            */
/*==============================================================*/
create table Enqueteur
(
   id                   int not null AUTO_INCREMENT,
   primary key (id)
);

/*==============================================================*/
/* Table : Etudiant                                             */
/*==============================================================*/
create table Etudiant
(
   id                   int not null AUTO_INCREMENT,
   primary key (id)
);

/*==============================================================*/
/* Table : Participation                                        */
/*==============================================================*/
create table Participation
(
   Per_id               int not null,
   Enq_id               int not null,
   id                   int not null AUTO_INCREMENT,
   Rol_id               int not null,
   primary key (id)
);

/*==============================================================*/
/* Table : Personne                                             */
/*==============================================================*/
create table Personne
(
   id                   int not null AUTO_INCREMENT,
   nom                  varchar(254),
   prenom               varchar(254),
   adresse              varchar(254),
   date_naissance       datetime,
   email                varchar(254),
   mot_de_passe         varchar(254),
   is_admin             boolean,
   primary key (id)
);

/*==============================================================*/
/* Table : Role                                                 */
/*==============================================================*/
create table Role
(
   id                   int not null AUTO_INCREMENT,
   nom                  varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table : Zone                                                 */
/*==============================================================*/
create table Zone
(
   id                   int not null AUTO_INCREMENT,
   nom_zone             varchar(254),
   primary key (id)
);

alter table Administrateur add constraint FK_Generalisation_9 foreign key (id)
      references Personne (id) on delete restrict on update restrict;

alter table Affectation add constraint FK_Association_7 foreign key (Enq_id2)
      references Enqueteur (id) on delete restrict on update restrict;

alter table Affectation add constraint FK_Association_7 foreign key (Zon_id)
      references Zone (id) on delete restrict on update restrict;

alter table Affectation add constraint FK_concerner foreign key (Enq_id)
      references Enquete (id) on delete restrict on update restrict;

alter table Affectation add constraint FK_realiser foreign key (Coo_id)
      references Coordonateur (id) on delete restrict on update restrict;

alter table Ajout add constraint FK_Association_5 foreign key (Enq_id)
      references Enquete (id) on delete restrict on update restrict;

alter table Ajout add constraint FK_Association_5 foreign key (Zon_id)
      references Zone (id) on delete restrict on update restrict;

alter table Ajout add constraint FK_faire foreign key (Coo_id)
      references Coordonateur (id) on delete restrict on update restrict;

alter table Commanditaire add constraint FK_Generalisation_10 foreign key (id)
      references Personne (id) on delete restrict on update restrict;

alter table Coordonateur add constraint FK_Generalisation_6 foreign key (id)
      references Role (id) on delete restrict on update restrict;

alter table Enquete add constraint FK_commanditer foreign key (Com_id)
      references Commanditaire (id) on delete restrict on update restrict;

alter table Enquete add constraint FK_creer foreign key (Adm_id)
      references Administrateur (id) on delete restrict on update restrict;

alter table Enqueter add constraint FK_Association_10 foreign key (Enq_id2)
      references Enqueteur (id) on delete restrict on update restrict;

alter table Enqueter add constraint FK_Association_10 foreign key (Etu_id)
      references Etudiant (id) on delete restrict on update restrict;

alter table Enqueter add constraint FK_appartenir foreign key (Enq_id)
      references Enquete (id) on delete restrict on update restrict;

alter table Enqueteur add constraint FK_Generalisation_7 foreign key (id)
      references Role (id) on delete restrict on update restrict;

alter table Etudiant add constraint FK_Generalisation_8 foreign key (id)
      references Role (id) on delete restrict on update restrict;

alter table Participation add constraint FK_Association_1 foreign key (Enq_id)
      references Enquete (id) on delete restrict on update restrict;

alter table Participation add constraint FK_Association_1 foreign key (Per_id)
      references Personne (id) on delete restrict on update restrict;

alter table Participation add constraint FK_avoir foreign key (Rol_id)
      references Role (id) on delete restrict on update restrict;

