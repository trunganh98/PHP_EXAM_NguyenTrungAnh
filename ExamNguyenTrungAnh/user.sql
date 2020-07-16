CREATE DATABASE exam_php;

CREATE TABLE user (
    id int(10) not null primary key auto_increment,
    fullname varchar (32),
    email char(50) not null,
    username varchar(12) not null unique ,
    password varchar (100) not null,
)

INSERT INTO `users`(`id`, `fullname`, `email`, `username`, `password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5]);