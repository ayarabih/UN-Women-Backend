<?php
include "./dbconnection.php";
$id =$_GET["id"];
$sql = "UPDATE customer SET id=$id where customer_name = 'ayarabih'";
// $sql = "SELECT  email FROM customer";
$conn->exec($sql);

echo "record delete successfully";
?>