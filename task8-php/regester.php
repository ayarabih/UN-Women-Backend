<?php
include('./dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regester form</title>
    <link href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="welcome.php" method="post">
        <label for="user_name">user_name</label>
        <input type="text" id="user_name" name="username"><br><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="mail"><br><br>
        <label for="pw">password</label>
        <input type="password" id="gender" value="female">female
        <input type="checkbox" value="male">male
        <br><br>
        <label for="courses">choose your courses</label>
        <select id=" cources" name="cources"></select>
            <option  value="html">HTML5</option>
            <option  value="html">PHP</option>
            <option  value="html">MYSQL</option>
</select>
<br><br>
<label for= "coment"yourcoment here: </label>
<textarea rows="="8" cols="20"></textarea>
<br><br>




</body>
</html>



