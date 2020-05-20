<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $dbh->exec('SET NAMES utf8');

} catch (PDOException $e) {
    echo "Ошибка";
}