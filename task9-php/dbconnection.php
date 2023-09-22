<?php
$host = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$host;dbname=school", $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo"connected sucssefull";
} catch (Exception $e){
    echo "connection failed" . $e->getMessage();
}
?>