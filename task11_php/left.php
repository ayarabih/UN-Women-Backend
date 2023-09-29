<?php
include "./dbconnection.php";
$data = $conn->query("SELECT customer.customer_name , customer.phone , order.type_order 
FROM customer  LEFT JOIN order
ON customer.customer_name=order.customer_name")->fetchAll();

    echo "<table border=1>
    <tr>
        <th> customer_name </th>
        <th> email </th>
        <th> phone </th>
        <th> address </th>
        <th> class </th>
    </tr>";


?>
