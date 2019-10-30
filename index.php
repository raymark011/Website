<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
else{
    echo "This is INDEX,welcome {$_SESSION['nickname']} <br/>";
    echo "<a href=\"adduser.php\">Add New User</a> | ";
    echo "<a href=\"logout.php\">LOG-OUT</a>";
}
​
?>