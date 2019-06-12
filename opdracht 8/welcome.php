<?php
session_start();
$naam = $_SESSION["account_naam"];
//$_SESSION['user_id'];
echo ("welkom " . $naam . ", je bent ingelogd");
echo '<br><a href="logout.php">logout</a>';
echo '<br><a href="profielpagina.php">profielpagina</a>';
if ($_SESSION["admin_logged-in"]){
echo '<br><a href="read-users.php">read users</a>';
}
var_dump($_SESSION["user_id"]);
var_dump($_SESSION["account_naam"]);
?>