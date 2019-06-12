<?php
session_start();
require_once "connect.php";
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>home</title>
</head>
<body>
<form action="login-1.php" method="post">
    nickname: <input type="text" name="naam">
    password: <input type="password" name="wachtwoordvak">
    <button type='submit' class='button_section'>login</button>
    <a href="registratie.php"><button type='button' class='button_section'>maak een account!</button></a>
</form>
<?php
error_reporting(0);
if (isset($_SESSION["ingelogd"])){
    echo "je bent al ingelogd";
    header("location: welcome.php");
}
?>


</body>
</html>
