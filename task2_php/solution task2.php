
<!DOCTYPE html>
<html>
<head>
    <title>session 2</title>
</head>
<body>
    <h1> php varibels to html </h1>
    <?php 

        function CheckNumber($x) {
            if ($x > 0)
              {$message = "Positive number";}
            if ($x == 0)
              {$message = "Zero";}
            if ($x < 0)
              {$message = "Negative number";}
            echo $message. is_numeric($x) ."<br>";
          }
          
          CheckNumber(20);
          CheckNumber(0);
          CheckNumber(-5);

    ?>

</body>
</html>
