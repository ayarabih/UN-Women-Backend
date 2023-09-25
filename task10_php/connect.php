<?php
$host ="localhost";
$username ="root";
$password ="";

try{
    $conn=new PDO("mysql:host=$host;dbname=butcher store",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->query("SELECT  email FROM customer")->fetchAll();
   
    echo "<table border=1>
    <tr>
        <th> customer_name </th>
        <th> email </th>
        <th> delete</th>
    </tr>";


        foreach($data as $row) {
            echo"<tr>
                <td>{$row["customer_name"]}</td>
                <td>{$row["email"]}</td>
                <td><a href=['delete.php?id={$row['customer_id']}'>delete</td>
                </tr>";
    }
    echo "</table>";
}
catch(Exception $e){
    echo"connection failed: ". $e->getMessage();
}


?>