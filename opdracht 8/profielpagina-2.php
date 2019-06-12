<?php
session_start();
?>
<html>
<head>

</head>
<body>

<?php
$naam= $_POST["naam"];
$wachtwoord=$_POST["wachtwoordvak"];

require_once "connect.php";

$sql = $conn->prepare("
select naam, password, admin from opdracht3php.users
");
$sql->execute();

?>
</body>
</html>


