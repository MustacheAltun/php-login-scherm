<?php
session_start();
echo 'welcome'.$_SESSION['ingelogd'];
echo '<br><a href="logout.php">logout</a>'
?>