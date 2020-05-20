<?php
header('Content-Type: text/xml');
header("Cache-Control: no-cache, must-revalidate");

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $score = $_GET["targetDate"];


    $cars = "SELECT DISTINCT cars.Name from cars, rent WHERE ID_Cars = FID_Car and Date_start > '". $score ."' or Date_end < '". $score ."'";

	echo '<?xml version="1.0" encoding="utf8" ?>';
	echo "<root>";
    foreach ($dbh->query($cars) as $row) {
        echo '<carName>'. $row['Name'] . '</carName>';
    }
    echo "</root>";
} catch (PDOException $e) {
    echo "Ошибка";
}