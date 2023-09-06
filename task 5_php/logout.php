<?php
session_start();
unset($_SESSION['user_name']);
unset($_SESSION['password']);
session_destroy();
echo "you have logged out";
setcookie("user",$_POST['username'],time()+(86400*30),'/');
header('Refresh:2; URL=form.php');
?>
