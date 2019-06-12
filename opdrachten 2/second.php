<?php
$nickname = $_GET["name"];
//$ww = $_POST["password"];

$username = array("bob", "piet", "mustafa");

$gevonden=false;
for ($i=0; $i< count($username); $i++)
{
    if ($nickname == $username[$i])
    {$gevonden = true;}
}
if ($gevonden)
    {echo "fout, username bestaat al";}
    else
    {echo "succes, account is gemaakt";}