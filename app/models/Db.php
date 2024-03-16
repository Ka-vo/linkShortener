<?php
// function database()
// {
$user = "admin";
$pass = "root";
$dbh = new PDO('pgsql:host=db; dbname=postgres', $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// return $dbh;
// }
//print_r($dbh);

$sql = 'CREATE TABLE IF NOT EXISTS Url (
        id serial PRIMARY KEY,
        longURL varchar(255) NOT NULL,
        shortURL varchar(100) NOT NULL
  )';

$dbh->exec($sql);
//var_dump($dbh);
