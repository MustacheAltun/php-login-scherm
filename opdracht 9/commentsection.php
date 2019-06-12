<?php
    date_default_timezone_set('Europe/Amsterdam');
    include 'comments.inc.php';
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>commentsection</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
$naam = $_SESSION["account_naam"];
echo "<form method='post' action='".setComments()."'>
    <input type='hidden' name='date' value='".date("Y-m-d H:i:s")."'>
    <input type='hidden' name='uid' value='$naam'>
    <textarea name='message' cols='30' rows='10'></textarea><br>
    <button type='submit' name='commentSubmit' class='button_section'>comment</button>
    <a href=\"welcome.php\"><button type='button' class='button_section'>menu</button></a>
</form>";
getComments();
?>
</body>

</html>