create database php_16_ss4;
create table php_16_ss4.roles (
	ID int primary key auto_increment,
    Name varchar(50) unique
);

insert into php_16_ss4.roles (name)
values ('Director'), ('Teacher'), ('Student');

SELECT * from php_16_ss4.roles;

DROP TABLE IF EXISTS php_16_ss4.users;

create table php_16_ss4.users (
	ID int primary key auto_increment,
    name varchar (50),
    email varchar(255) unique,
    password varchar(50),
    role int null default 1,
    foreign key (role) references roles(id)
);

INSERT INTO php_16_ss4.users (name,email,password, role)
VALUES ('Nam','nam.nguyenhai@axonactive.com','123456',1),
('Nhut','nam.nguyenhai@yuriqa.com','123',2);

INSERT INTO php_16_ss4.users (name,email,password)
VALUES ('Son','nam.son@yuriqa.com','123');

SELECT * from php_16_ss4.users;
