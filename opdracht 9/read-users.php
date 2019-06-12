<?php
//tabel uitlezen en netjes afdrukken------------------------------------------
require_once "connect.php";
error_reporting(0);
$klanten = $conn->prepare(
    "select id,naam from opdracht3php.users"
);
$klanten->execute();
foreach ($klanten as $klant){
    echo "<ul>";
    echo "<li>". $klant["id"]."</li>";
    echo "<li>". $klant["naam"]."</li>";
    echo "</ul>";
}
?>