<?php
error_reporting(0);
function setComments(){
if (isset($_POST['commentSubmit'])){
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $test = mysqli_connect('localhost', 'root', '', 'opdracht3php');

    require_once "connect.php";
    $sql = "insert into opdracht3php.commentsection (uid, date, message) 
            values ('$uid', '$date', '$message')";
    $result = $test->query($sql);
}
}

function getComments(){
    $test = mysqli_connect('localhost', 'root', '', 'opdracht3php');
    $sql = "select * from opdracht3php.commentsection";
    $result = $test->query($sql);
    while ($row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
            echo $row['uid']."<br>";
            echo $row['date']."<br><br>";
            echo nl2br($row['message']);
        echo "</p>";
        if (isset($_SESSION['account_naam'])){
            if ($_SESSION['account_naam'] == $row["uid"] or $_SESSION["admin_logged-in"]){
                echo "<form  method='post' class='delete-button' action='".deleteComments()."'>
            <input type='hidden' name='cid' value='".$row["cid"]. "'>
            <button type='submit' name='Delete' class='delete-button'>Delete</button>
        </form>
        <form class='edit-form' method='post' action='editcomment.php'>
            <input type='hidden' name='cid' value='" .$row["cid"]."'>
            <input type='hidden' name='uid' value='".$row["uid"]."'>
            <input type='hidden' name='date' value='".$row["date"]."'>
            <input type='hidden' name='message' value='".$row["message"]."'>
            <button>Edit</button>
        </form>";
            }
            echo "</div>";
        }

    }
}
function editComments(){
    if (isset($_POST['commentSubmit'])){
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $test = mysqli_connect('localhost', 'root', '', 'opdracht3php');

        require_once "connect.php";

        $sql = "UPDATE opdracht3php.commentsection SET message='$message', date ='$date',uid = '$uid' WHERE cid=$cid";


        $result = $test->query($sql);
        header("Location: commentsection.php");
    }
}

function deleteComments(){
    if (isset($_POST['Delete'])){
        $cid = $_POST['cid'];
        $test = mysqli_connect('localhost', 'root', '', 'opdracht3php');

        require_once "connect.php";

        $sql = "DELETE FROM opdracht3php.commentsection WHERE cid='$cid'";


        $result = $test->query($sql);

        header("Location: commentsection.php");
    }
}