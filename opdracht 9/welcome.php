<head>
    <link rel="stylesheet" href="style.css">
</head>

<?php
error_reporting(0);
require_once "connect.php";
session_start();
$naam = $_SESSION["account_naam"];
//$_SESSION['user_id'];
echo ("welkom " . $naam . ", je bent ingelogd");
echo '
    <br><a href="logout.php"><button type=\'button\' class=\'button_section\'>logout</button></a>
    <a href="profielpagina.php"><button type=\'button\' class=\'button_section\'>profielpagina</button></a>
    <a href="commentsection.php"><button type=\'button\' class=\'button_section\'>commentsection</button></a>
';
if ($_SESSION["admin_logged-in"]){
echo '<a href="read-users.php"><button type=\'button\' class=\'button_section\'>Lees de gebruikers</button></a>';
}
?>