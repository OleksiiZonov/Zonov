<?php
header('Content-Type: application/json');


$dsn = "mysql:host=localhost; dbname=var1";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $rent = $_GET["rentTarget"];

    $rentStats = "SELECT rent.Cost from rent WHERE Date_start < '". $rent ."'";

    $sum = 0;


    foreach ($dbh->query($rentStats) as $row) {
        $sum += $row['Cost'];
    }
    echo json_encode(array_sum((array)$sum));
    
} catch (PDOException $e) {
    echo "Ошибка";
}