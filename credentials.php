<?php
$servername = "localhost";
$username = "1174300";
$password = "Sadek123";

try {
    $conn = new PDO("mysql:host=$servername;dbname=1174300db2", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>