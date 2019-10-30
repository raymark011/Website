<?php 
$dbhost = 'localhost';
$dbname = 'rayanadb';
$dbusername = 'root';
$dbpassword = '';

try {
    $dbConn = new PDO("mysql:host={$dbhost};dbname = {$dbname}", $dbusername, $dbpassword);

    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>