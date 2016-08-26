---mysql数据库
create database day15;
use day15;

CREATE TABLE phpuser(
	id  INT  not null auto_increment,
	uname VARCHAR(20),
	pwd VARCHAR(100)
);
INSERT INTO phpuser VALUES(1,'aa','123');
INSERT INTO phpuser VALUES(2,'bb','123');


