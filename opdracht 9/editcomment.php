<?php
date_default_timezone_set('Europe/Amsterdam');
include 'comments.inc.php';
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
require_once "connect.php";
$cid = $_POST['cid'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$message = $_POST['message'];
echo "<form method='post' action='".editComments()."'>
    <input type='hidden' name='cid' value='.$cid.'>
    <input type='hidden' name='uid' value='.$uid.'>
    <input type='hidden' name='date' value='.$date.'>
    <textarea name='message' cols='30' rows='10'>".$message."</textarea><br>
    <button type='submit' name='commentSubmit' class='button_section'>Edit</button>
</form>";
?>
</body>

</html>