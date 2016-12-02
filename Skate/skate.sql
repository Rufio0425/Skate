drop database if exists skate;

create database skate;

use skate;

create table volunteer(
	id int auto_increment primary key,
	first_name varchar(255),
	last_name varchar(255),
	email varchar(255),
	bio varchar(255),
	profile_image_url varchar(255)
);

insert into volunteer(first_name, last_name, email, bio, profile_image_url) values('Ryan', 'Lay', 'ryanlay@gmail.com', 'Ryan is one of the best. His drive and passion for skateboarding flows over into his work with Skate After School. Determined and willing, Ryan goes out of his way to make the kids feel included and welcomed. We are more than honored to have him as a part of our team!','/images/ryan_lay_1.jpg');
insert into volunteer(first_name, last_name, email, bio, profile_image_url) values('Josh', 'Eberhard', 'jeberhard@gmail.com', 'This is the bio of Josh Eberhard, what a super awesome bio this is.','/images/josh_eberhard.jpg');
insert into volunteer(first_name, last_name, email, bio, profile_image_url) values('Corey', 'Cavanaugh', 'coreyc@gmail.com', 'This is the bio of Corey Cavanaugh, what a super awesome bio this is.','/images/correy_cavanaugh.jpg');
insert into volunteer(first_name, last_name, email, bio, profile_image_url) values('Peter', 'Vlad', 'pvlad@gmail.com', 'This is the bio of Peter Vlad, what a super awesome bio this is.','http://3.bp.blogspot.com/-zNsGNYzYmg8/UbY2u2OtS4I/AAAAAAAAMbk/B0CJxtsrmys/s1600/vlad.jpg');
insert into volunteer(first_name, last_name, email, bio, profile_image_url) values('Max', 'Collay', 'mcollay@gmail.com', 'This is the bio of Max Collay, what a super awesome bio this is.','/images/max_collay_ollie.jpg');
insert into volunteer(first_name, last_name, email, bio, profile_image_url) values('Caleb', 'Schrank', 'cschrank@gmail.com', 'This is Caleb, he is awesome','https://pbs.twimg.com/profile_images/509758688924827648/79CWTWPo_400x400.jpeg');

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
	image_url varchar(255),
	url varchar(255)
);

create table volspons(
	vol_id int,
	spons_id int
);

insert into sponsor (name, image_url, url) values('Welcome Skateboards', 'http://www.twelveboardstore.com.au/web_images/welcomeskate.png', 'http://www.welcomeskateboards.com/');
insert into sponsor (name, image_url, url) values('Colaltree', 'http://static1.squarespace.com/static/50ab002ee4b00ef29d01c84e/50ac846ce4b0b1fe7ccf60af/50ac846ee4b0b1fe7ccf60b4/1353483375455/ClientLogo_CT.jpg', 'http://www.coalatree.com/');

insert into volspons(vol_id, spons_id) values (1,1);
insert into volspons(vol_id, spons_id) values (1,2);
insert into volspons(vol_id, spons_id) values (2,1);


create table users (
	id int auto_increment primary key,
	email varchar(255),
	password varchar(255),
	first_name varchar(255),
	last_name varchar(255),
	remember_token varchar(255),
	created_at datetime,
	updated_at datetime
);