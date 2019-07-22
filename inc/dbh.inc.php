<?php


// $dbServerName = "localhost";
$dbServerName = "65.39.128.46";
$dbUserName = "idemomot_Usr2019";
$dbPassword = "pVBxBkRp0HPbn8Qz";
$dbName = "idemomot_news";


// user = list-a_master
// pass = 2epOrRrPEvXHjYG6



// Datos de acceso local

// $dbServerName = "localhost";
// $dbUserName = "idemo";
// $dbPassword = "pVBxBkRp0HPbn8Qz";
// $dbName = "lattedev_idemo";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);




$pdo_dsn='mysql:dbname=idemomot_news;host=localhost';$pdo_user='idemomot_Usr2019';$pdo_password='pVBxBkRp0HPbn8Qz';
// $pdo_dsn='mysql:dbname=lattedev_idemo;host=localhost'; $pdo_user='idemo'; $pdo_password='pVBxBkRp0HPbn8Qz';


$conn2 = new PDO($pdo_dsn, $pdo_user, $pdo_password);
$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
