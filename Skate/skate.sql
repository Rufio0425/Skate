drop database if exists skate;

create database skate;

use skate;

create table volunteer(
	id int auto_increment primary key,
	first_name varchar(255),
	last_name varchar(255),
	email varchar(255),
	profile_image_url varchar(255)
);

insert into volunteer(first_name, last_name, email, profile_image_id) values('Ryan', 'Lay', 'ryanlay@gmail.com', 1);
insert into volunteer(first_name, last_name, email, profile_image_id) values('Josh', 'Eberhard', 'jeberhard@gmail.com', 2);

create table volunteer_media(
	id int auto_increment primary key,
	volunteer_id int,
	url varchar(255),
	title varchar(255),
	type_id int
);

create table media_type(
	id int auto_increment primary key,
	description varchar(255)
);

insert into media_type(description) values('image');
insert into media_type(description) values('video');

create table sponsor(
	id int auto_increment primary key,
	name varchar(255),
	image varchar(255),
	url varchar(255)
);
