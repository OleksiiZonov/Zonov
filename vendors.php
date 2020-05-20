<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $score = $_GET["vendor"];


    $cars = "SELECT cars.Name FROM cars, vendors WHERE FID_Vendors=ID_Vendors AND vendors.Name='". $score ."'";

    foreach ($dbh->query($cars) as $row) {
        echo '<li>'. $row['Name'] . '</li>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}