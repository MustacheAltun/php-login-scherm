<doctype>
<?php
session_start();
?>
<head>

</head>
<boddy>

</boddy>
<?php
$naam= $_POST["naam"];
$wachtwoord=$_POST["wachtwoordvak"];
$gevonden = false;

require_once "connect.php";

$sql = $conn->prepare("
select naam, password from opdracht3php.users
");
$sql->execute();


foreach ($sql as $rij){
    if ($naam == $rij["naam"]){
        if (password_verify($wachtwoord, $rij["password"])){

            $gevonden = true;
        }else{
            $gevonden = false;
        }
    }
}

if ($gevonden)
{
    echo ("welkom " . $naam . ", je bent ingelogd");
    $_SESSION["ingelogd"] = true;
    header("location: welcome.php");
}else{
    echo ("verkeerde inlog");
    session_destroy();
}
echo ("<br />");
?>
</doctype>