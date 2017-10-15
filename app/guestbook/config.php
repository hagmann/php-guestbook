<?php

error_reporting(-1);
ini_set('display_errors', 'On');

$dsn = "mysql:host=db_phptraining;dbname=phpguestbook;charset=utf8";
$dbuser = 'root';
$dbpass = 'root';

try {
  $db = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
