CREATE TABLE ud5_usuarios_pass
(ID int not null AUTO_INCREMENT primary key,
user varchar(20) not null,
pass text not null);

insert into ud5_usuarios_pass (user,pass) values ('admin','admin');
insert into ud5_usuarios_pass (user,pass) values ('rafa','rafa');
insert into ud5_usuarios_pass (user,pass) values ('usuario','usuario');