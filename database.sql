create database rayanadb;

use rayanadb;

CREATE TABLE `student_tbl` (
    `id` int(255) NOT NULL auto_increment,
    `firstname` varchar(100) NOT NULL,
    `lastname` varchar(100) NOT NULL,
    `nickname` varchar(100) NOT NULL,
    `gradelevel` varchar(100) NOT NULL,
    `date_added` date,
    `username` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
);