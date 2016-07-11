/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2016/7/7 10:43:07                            */
/*==============================================================*/


drop table if exists business;

drop table if exists cart;

drop table if exists collect_goods;

drop table if exists collect_shop;

drop table if exists evaluate;

drop table if exists goods;

drop table if exists goodsorder;

drop table if exists shop;

drop table if exists user;

/*==============================================================*/
/* Table: business                                              */
/*==============================================================*/
create table business
(
   bid                int not null AUTO_INCREMENT,
   username           varchar(50) not null unique,
   password           varchar(50) not null,
   email              varchar(50) not null unique,
   tel                varchar(50) not null unique,
   primary key (bid)
);

/*==============================================================*/
/* Table: cart                                                  */
/*==============================================================*/
create table cart
(
   uid                  int not null,
   gid                  int not null,
   primary key (uid, gid)
);

/*==============================================================*/
/* Table: collect_goods                                         */
/*==============================================================*/
create table collect_goods
(
   uid                  int not null,
   gid                  int not null,
   primary key (uid, gid)
);

/*==============================================================*/
/* Table: collect_shop                                          */
/*==============================================================*/
create table collect_shop
(
   uid                  int not null,
   sid                  int not null,
   primary key (uid, sid)
);

/*==============================================================*/
/* Table: evaluate                                              */
/*==============================================================*/
create table evaluate
(
   uid                  int not null,
   gid                  int not null,
   rank                 varchar(50),
   content              varchar(1000),
   primary key (uid, gid)
);

/*==============================================================*/
/* Table: goods                                                 */
/*==============================================================*/
create table goods
(
   gid                  int not null AUTO_INCREMENT,
   sid                  int not null,
   g_name               varchar(50) not null,
   price                varchar(50) not null,
   g_img                varchar(200),
   count                varchar(50),
   g_classa             varchar(50),
   g_classb             varchar(50),
   g_evaluate           varchar(50),
   sold                 varchar(50),
   primary key (gid)
);

/*==============================================================*/
/* Table: goodsorder                                               */
/*==============================================================*/
create table goodsorder
(
   uid                  int not null,
   gid                  int not null,
   number               int not null,
   primary key (uid, gid)
);

/*==============================================================*/
/* Table: shop                                                  */
/*==============================================================*/
create table shop
(
   sid                  int not null AUTO_INCREMENT,
   bid                  int not null,
   s_address            varchar(50) not null,
   s_img                varchar(200),
   sname                varchar(50),
   primary key (sid)
);

/*==============================================================*/
/* Table: user                                                  */
/*==============================================================*/
create table user
(
   uid                  int not null AUTO_INCREMENT,
   username             varchar(50) not null unique,
   password             varchar(50) not null,
   email                varchar(50) not null unique,
   headimg              varchar(200),
   nickname             varchar(50),
   sex                  varchar(1),
   address              varchar(100),
   tel                  varchar(50) not null unique,
   primary key (uid)
);

/*==============================================================*/
/* Table: system                                                */
/*==============================================================*/
create table system
(
   sysid                int not null AUTO_INCREMENT,
   guidea               varchar(10) not null,
   guideb               varchar(10) not null,
   guidec               varchar(10) not null,
   primary key (sysid)
);

alter table cart add constraint FK_cart foreign key (uid)
      references user (uid) on delete restrict on update restrict;

alter table cart add constraint FK_cart2 foreign key (gid)
      references goods (gid) on delete restrict on update restrict;

alter table collect_goods add constraint FK_collect_goods foreign key (uid)
      references user (uid) on delete restrict on update restrict;

alter table collect_goods add constraint FK_collect_goods2 foreign key (gid)
      references goods (gid) on delete restrict on update restrict;

alter table collect_shop add constraint FK_collect_shop foreign key (uid)
      references user (uid) on delete restrict on update restrict;

alter table collect_shop add constraint FK_collect_shop2 foreign key (sid)
      references shop (sid) on delete restrict on update restrict;

alter table evaluate add constraint FK_evaluate foreign key (uid)
      references user (uid) on delete restrict on update restrict;

alter table evaluate add constraint FK_evaluate2 foreign key (gid)
      references goods (gid) on delete restrict on update restrict;

alter table goods add constraint FK_shop_goods foreign key (sid)
      references shop (sid) on delete restrict on update restrict;

alter table goodsorder add constraint FK_goodsorder foreign key (uid)
      references user (uid) on delete restrict on update restrict;

alter table goodsorder add constraint FK_goodsorder2 foreign key (gid)
      references goods (gid) on delete restrict on update restrict;

alter table shop add constraint FK_business_shop foreign key (bid)
      references business (bid) on delete restrict on update restrict;

