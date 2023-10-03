<?php

function databaseConnection()
{
  $user = "admin";
  $pass = "root";
  $dbh = new PDO('pgsql:host=db; dbname=postgres', $user, $pass);
  // return $dbh;
  if ($dbh) {
    $h = "Connected to the  database successfully!";
    return  print_r($h);
  } else {
    return (print_r("Having connection problems"));
  }
}
