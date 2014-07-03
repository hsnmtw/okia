drop database if exists okia;
create database okia;

use okia;

create table player(
     id            varchar(20)    not null primary key,
     pswd          varchar(32)    not null,
     name          varchar(50)    not null,
     is_online     enum('0','1')  not null default '0',
     lastlogin     datetime
);

create table challenge(
     id            varchar(32)    not null primary key,
     player1       varchar(20)    not null,
     player2       varchar(20)    not null,
     player3       varchar(20)    not null,
     player4       varchar(20)    not null
);


create table game(
     id            varchar(32)    not null primary key,
     challenge_id  varchar(32)    not null ,
     team1_req     smallint       not null default 0,
     team2_req     smallint       not null default 0,
     team1_got     smallint       not null default 0,
     team2_got     smallint       not null default 0,	 	 
     created       datetime       not null
);

create table game_state(
     state_id    timestamp        not null primary key,
     game_id     varchar(32)      not null,
     state       varchar(500)     not null 
);
     