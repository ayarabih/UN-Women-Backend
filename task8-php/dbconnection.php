<?php
$host = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$host;dbname=un_php", $usernamez, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo"connected failed";
} catch (Exception $e){
    echo "connection failed" . $e->getMessage();
}
?>