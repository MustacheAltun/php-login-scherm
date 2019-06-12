<?php
session_start();
echo 'welcome';
echo '<br><a href="logout.php">logout</a>';
if ($_SESSION["admin_logged-in"]){
echo '<br><a href="read-users.php">read users</a>';
}else{
    session_destroy("admin_logged-in");
}
?>