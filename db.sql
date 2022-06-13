/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  05/06/2022 14:30:32                     */
/*==============================================================*/


drop table if exists Joueur;

drop table if  exists Coaches;

drop table if exists Pack;

drop table if exists Avantage;

drop table if exists Estcomposer;
   



/*==============================================================*/
/* Table : Joueur                                           */
/*==============================================================*/
create table Joueur
(
   IDJoueur         int(11)not null,
   Nomutilisateur           varchar(100) not null,
   email                varchar(254) not null,
   Password              varchar(254) not null,
   CompteDiscord          varchar(50) not null,
   Niveau                   varchar(50) not null,
   Divisions                  varchar(50) not null,
   primary key (IDJoueur)

);

/*==============================================================*/
/* Table : Coaches                                             */
/*==============================================================*/
create table Coaches
(
   CoachID               int not null,
   Nom                  varchar(200) not null,
   Prénom                varchar(200) not null,
   Email                varchar(100) not null,
   Comptediscord           varchar(100) not null,
   Telephone                varchar(100) not null,
   primary key (CoachID)
);
   


/*==============================================================*/
/* Table : Pack                                             */
/*==============================================================*/
create table Pack
(
   IDPack              int not null,
   NomPack             varchar(100) not null,
   PrixPack            varchar(50) not null,
   primary key (IDPack )
);
/*==============================================================*/
/* Table : Avantage                                            */
/*==============================================================*/
create table Avantage
(
   IDAvantage    int not null,
   NomAvantage   varchar(100) not null,
   Détail         varchar(250) not null,
   primary key (IDAvantage)
);
/*==============================================================*/
/* Table : Est composer                                           */
/*==============================================================*/
create table Estcomposer
(
   codeAvantage        int not null,  
   codePack       int not null,  
   primary key (codeAvantage,codePack),
   FOREIGN KEY(codePack) REFERENCES Pack(IDPack),
   FOREIGN KEY(codeAvantage) REFERENCES Avantage(IDAvantage)

);
ALTER TABLE `Joueur`
  MODIFY `IDJoueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE Joueur
ADD CoachID int not null;
ALTER TABLE Joueur
ADD FOREIGN KEY (CoachID)
REFERENCES Coaches (CoachID);

ALTER TABLE Joueur
ADD IDPack int not null;
ALTER TABLE Joueur
ADD FOREIGN KEY (IDPack)
REFERENCES Pack (IDPack);






