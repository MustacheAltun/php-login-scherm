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
select naam, password, admin from opdracht3php.users
");
$sql->execute();

$bob=mysqli_query("SELECT * FROM opdracht3php.users WHERE naam = '$naam' AND password = '$wachtwoord'");
$row=mysqli_fetch_assoc($bob);
$num=mysqli_num_rows();

foreach ($sql as $rij){

    if ($naam == $rij["naam"]){
        echo $naam. " ". $rij["naam"]."<br>";
        if (password_verify($wachtwoord, $rij["password"])){
            if($num==1)
            {
                session_start();
                $_SESSION['user_id']= $row['id'];
            }
            $_SESSION["account_naam"] = $naam;
            if ($rij["admin"]){
                $_SESSION["admin_logged-in"] = true;
                echo $rij["admin"]."<br>";
            }
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