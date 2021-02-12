use cs2033;

create table contacts(
   contactID int AUTO_INCREMENT,
   username varchar(15),
   email varchar(120),
   primary key(contactID)
)engine=innodb;

insert into contacts(username,email) values('jsmith','jim.smith@gmail.com');
insert into contacts(username,email) values('mjones','mjones@gmail.com');
insert into contacts(username,email) values('rwilson','rick.wilson@gmail.com');
insert into contacts(username,email) values('kjohnson','kjohnson@gmail.com');
insert into contacts(username,email) values('bwilliams','bwilliams@gmail.com');