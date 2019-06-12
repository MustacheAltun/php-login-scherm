<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once "connect.php";
    $connection= mysqli_connect("localhost", "root", "", "opdracht3php");
    $id = NULL;
    $admin= NULL;
    $naam= $_POST["naamvak"];
    $password= $_POST["passwordvak"];
    $gevonden= false;
    $paswhash= password_hash($password, PASSWORD_DEFAULT);
    $return = true;
    $check_duplicate_naam = "SELECT naam FROM users where naam = '$naam'";
    $result = mysqli_query($connection, $check_duplicate_naam);
    $count = mysqli_num_rows($result);

    if ($count > 0){
        echo "<h1>this username is allready in use</h1>";
        $return = false;
    }

    if ($naam == '' || empty($naam)){
        echo "<h1> username cannot be blank</h1>";
        $return = false;
    }

    $sql = $conn->prepare("insert into opdracht3php.users values (:id, :naam, :password, :admin )");

if ($return == true){
    $sql->execute([
            "id" => $id,
            "naam" => $naam,
            "password" => $paswhash,
            "admin" => $admin
        ]
    );
}



    echo "account is toegevoegd";
    echo "<br><a href=\"registratie.php\"><button type='button' class='button_section'>registratie</button></a>
    <a href=\"index.php\"><button type='button' class='button_section'>inloggen</button></a>";
    ?>
</body>
</html>