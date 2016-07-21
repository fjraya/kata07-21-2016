<?php

$sqlite = new SQLite3("../db/project.sqlite");
$sqlite->exec("CREATE TABLE IF NOT EXISTS Users (username varchar(25) not null, password varchar(50) not null, name varchar(150) not null, surname1 varchar(150) not null, surname2 varchar(150) not null, PRIMARY KEY (username))");
$sqlite->exec("DELETE FROM Users");
$sqlite->exec("INSERT INTO Users (username, password, name, surname1, surname2) values ('user1', '".md5('password1')."', 'name1user1', 'surname1user1', 'surname2user1')");
$sqlite->exec("INSERT INTO Users (username, password, name, surname1, surname2) values ('user2', '".md5('password2')."', 'name1user2', 'surname1user2', 'surname2user2')");
$sqlite->exec("INSERT INTO Users (username, password, name, surname1, surname2) values ('user3', '".md5('password3')."', 'name1user3', 'surname1user3', 'surname2user3')");
$sqlite->exec("INSERT INTO Users (username, password, name, surname1, surname2) values ('admin', '".md5('password4')."', 'name1user4', 'surname1user4', 'surname2user4')");
?>