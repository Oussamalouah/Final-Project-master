/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  01/03/2022 12:30:44                      */
/*==============================================================*/


drop table if exists Customers;

drop table if exists OrderDetails;

drop table if exists Orders;


/*==============================================================*/
/* Table : Customers                                            */
/*==============================================================*/
create table Customers
(
   customerCode         int not null,
   Username             varchar(100) not null,
   email                varchar(254) not null,
   Password              varchar(254) not null,
   primary key (customerCode)
);

/*==============================================================*/
/* Table : OrderDetails                                         */
/*==============================================================*/
create table OrderDetails
(
   orderID              int not null,
   Gamename             varchar(100) not null,
   Coachname            varchar(100) not null,
   primary key (orderID, Gamename)
);

/*==============================================================*/
/* Table : Orders                                               */
/*==============================================================*/
create table Orders
(
   orderID              int not null,
   customerCode         int not null,
   orderDate            datetime,
   primary key (orderID)
);


alter table OrderDetails add constraint FK_Contient foreign key (orderID)
      references Orders (orderID) on delete restrict on update restrict;


alter table Orders add constraint FK_commander foreign key (customerCode)
      references Customers (customerCode) on delete restrict on update restrict;
