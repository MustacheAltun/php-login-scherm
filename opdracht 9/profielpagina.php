<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
session_start();
?>
<head>
    <meta charset="UTF-8">
    <title>profielpagina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>profielpagina</h1>
<p>
    dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel klant van de database garage.
</p>
<?php
$naam = $_SESSION["account_naam"];

//klantgegevens uit de tabel halen------------------------------
require_once "connect.php";

$klanten = $conn->prepare("
select  naam, password from opdracht3php.users where naam = :naam");
$klanten->execute(["naam" => $naam]);

//klantgegevens in een nieuw formulier zien------------------------------------------
echo "<form action='profielpagina-1.php' method='post'>";
foreach ($klanten as $klant){

    /*echo "naam:<input type='text'";
    echo "name = 'klantnaamvak' ";
    echo "> <br />";*/

    echo "password:<input type='password'";
    echo "name = 'password' ";
    echo "> <br />";


}

echo "<button type='submit' class='button_section'>submit</button>
    <a href=\"welcome.php\"><button type='button' class='button_section'>menu</button></a>";
echo "</form>";
// er moet eigenlijk nog gecontroleerd worden op een bestaand klantid
?>
</body>
</html>