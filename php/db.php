<?php
function databace()
{
  $user = "admin";
  $pass = "root";
  $dbh = new PDO('pgsql:host=db; dbname=postgres', $user, $pass);
  return $dbh;
}
