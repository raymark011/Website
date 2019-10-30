<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:index.php");
}
include_once ('config.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM rayanadb.student_tbl WHERE username = :username && password = :password";
    $query = $dbConn -> prepare($sql);
    $query -> bindParam(':username', $username);
    $query -> bindParam(':password', $password);
    $query -> execute();
    
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $nickname = $row['nickname'];
    }

    $result =$query->rowCount();
    if($result > 0){
        $_SESSION['username'] = "ok";
        $_SESSION['nickname'] = $nickname;
        header("location: index.php");
    } else {
        echo "Error: Wrong Username or Password";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>LOGIN PAGE</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            <label for="">USERNAME</label>
            <input type="text" name="username"><br>
            <label for="">PASSWORD</label>
            <input type="password" name="password"><br>
            <button type="submit" name="login">LOGIN</button>
        </form>
    </body>
</html>