drop database if exists skate;

create database skate;

use skate;

create table volunteer(
	id int auto_increment primary key,
	first_name varchar(255),
	last_name varchar(255),
	email varchar(255),
	profile_image_id int
);

insert into volunteer(first_name, last_name, email, profile_image_id) values('Ryan', 'Lay', 'ryanlay@gmail.com', 1);
insert into volunteer(first_name, last_name, email, profile_image_id) values('Josh', 'Eberhard', 'jeberhard@gmail.com', 2);

create table volunteer_image(
	id int auto_increment primary key,
	volunteer_id int,
	file_name varchar(255)
);

create table volunteer_video(
	id int auto_increment primary key,
	volunteer_id int,
	title varchar(255),
	url varchar(255)
);

create table sponsor(
	id int auto_increment primary key,
	name varchar(255),
	image varchar(255),
	url varchar(255)
);
