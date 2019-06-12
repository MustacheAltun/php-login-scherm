<?php
session_start()

?>
<html>
<head>

</head>
<body>
<?php
if (isset($_SESSION["ingelogd"])){
    echo "je bent al ingelogd";
    header("location: welcome.php");
}
?>

<form action="login-1.php" method="post">
    nickname: <input type="text" name="naam">
    password: <input type="password" name="wachtwoordvak">
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
