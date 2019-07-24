<?php

$dbname = 'idemomot_news';
$dbuser = 'idemomot_Usr2019';
$dbpass = 'pVBxBkRp0HPbn8Qz';
$dbhost = '76.74.235.160';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


$dbServerName = "localhost";
$dbUserName = "idemomot_Usr2019";
$dbPassword = "pVBxBkRp0HPbn8Qz";
$dbName = "idemomot_news";


// $dbServerName = "localhost";
// $dbUserName = "idemomot_user";
// $dbPassword = "FTs6G73Gv2";
// $dbName = "idemomot_wordpress";

$pdo_dsn='mysql:dbname=idemomot_news;host=localhost';$pdo_user='idemomot_Usr2019';$pdo_password='pVBxBkRp0HPbn8Qz';

// Datos de acceso local

// $dbServerName = "localhost";
// $dbUserName = "idemo";
// $dbPassword = "pVBxBkRp0HPbn8Qz";
// $dbName = "lattedev_idemo";

// $pdo_dsn='mysql:dbname=lattedev_idemo;host=localhost'; $pdo_user='idemo'; $pdo_password='pVBxBkRp0HPbn8Qz';



$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
$conn2 = new PDO($pdo_dsn, $pdo_user, $pdo_password);
$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
