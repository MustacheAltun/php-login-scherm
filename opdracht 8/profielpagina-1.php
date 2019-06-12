<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <title>gar-update-klant3.php</title>
</head>
<body>
<h1>profielpagina-1</h1>
<p>
    klantgegevens wijzigen in de tabel klant van de database garage.
</p>
<?php
//klantgegevens uit het formulier halen-----------------------------------------------------
//$klantid = $_POST["klantidvak"];
$naam = $_SESSION["account_naam"];
$pw = $_POST["password"];
$paswhash= password_hash($pw, PASSWORD_DEFAULT);
//$naam_check = $_SESSION["account_naam"];
//$id_account = $_GET['id'];
$_SESSION["account_naam"];
var_dump($pw);

// updaten klantgegevens------------------------------------------------
require_once "connect.php";
$sql = $conn->prepare("
update opdracht3php.users set 
  password = :paswhash
where naam = :naam
");
var_dump($sql);


$sql->execute([
    "paswhash" => $paswhash,
    "naam" => $naam
]);
var_dump($sql);
echo "de klant is gewijzigd";
echo "<a href='welcome.php'>terug naar het menu</a>";
?>
</body>
</html>