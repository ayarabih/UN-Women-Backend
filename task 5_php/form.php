<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php cookies</title>
</head>
<body>
<?php
// echo 'welcome'.$_COOKIE('user');
$msg='';
    if(isset($_POST['submit'])){
        if(!empty($_POST['username']) &&!empty($_POST['pw'])){
            $_SESSION['user_name']=$_POST['username'];
            $_SESSION['password']=$_POST['pw'];
            $cookie_name='user';
            $cookie_value=$_POST['username'];
            setcookie($cookie_name, $cookie_value,time() +(86400 * 30), "/"); // 86400 = 1 day
            $msg='welcome'.$_COOKIE['user'];
        }
    }
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
User name: <input type="text" name="username"><br><br>
Password:<input type="password" name="pw"><br>
<input type="submit" name="submit">

</form><br>
    click here to logout:<a hraf="logout.php"> log out</a><br>

<?php echo $msg; ?>
</body>
</html>