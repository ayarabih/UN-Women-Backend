<?php

class customer{
    // properties
   public $name;
   public $email;
   public $age;


   public function __construct($stuName,$stuEmail,$stuAge)
    {
        $this->name=$stuName;
        $this->email=$stuEmail;
        $this->age=$stuAge;
      
    }
   public function getData(){
    echo "customer Name: ". $this->name ."<br>";
    echo "customer Email: ".  $this->email ."<br>";
    echo "customer Age: ".  $this->age ."<br>";
   }
}


$stu1=new customer('aya','ayarabih21@gmail.com',20);

$stu2= new customer('hossam','hossam@gmail.com',21);

$stu3= new customer('yassmen','yassmen@gmail.com',24);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>

<body>
<div class="container">
  <h2>Student Date</h2>
  <div class="alert alert-success">
    <?php
  $stu1->getData();
?>
  </div>
  <div class="alert alert-success">
    <?php
  $stu2->getData();
?>
  </div>
  <div class="alert alert-success">
    <?php
  $stu3->getData();
?>
  </div>
</div>

</body>
</html>
 