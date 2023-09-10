<?php
$host ="localhost";
$username ="root";
$password ="";

try{
    $conn=new PDO("mysql:host=$host;dbname=school",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->query("SELECT Name , email FROM student")->fetchAll();
   
    echo "<table border=1>
    <tr>
        <th> Name</th>
    </tr>";


        foreach($stmt as $k) {
            echo"<tr>
                <td>{$k ["Name"]}</td>
                </tr>";
    }
    echo "</table>";
}
catch(Exception $e){
    echo"Error: ". $e->getMessage();
}


?>