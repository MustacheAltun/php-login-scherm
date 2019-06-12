<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht 3</title>
</head>
<body>
<h1>read klanten</h1>
<p>
    dit zijn alle gegevens uit de tabel users van de databse garage.
</p>
<?php
//tabel uitlezen en netjes afdrukken------------------------------------------
require_once "gar-connect.php";

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
</body>
</html>