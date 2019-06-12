<?php
$servername = "localhost";
$dbname = "opdracht3php";
$username = "root";
$password = "";

try
{
    $conn = new PDO("mysql:host = $servername; dbname = $dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection gelukt <br />";
}
catch (PDOException $e)
{
    echo "cennectie mislukt" . $e->getMessage();
}