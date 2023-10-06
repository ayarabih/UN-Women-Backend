<?php

class User { 
    public static $num= 0;  

    public function __construct(
        public $name,
         public $email,
         public  $age)

    {
        $this->name = $name;
        $this->email= $email;
        $this->age = $age;
        self :: $num++;
        self :: greeting($name);    
    }

    


    public function getData() {
       
       echo $this->name ."<br>";
       echo $this->email ."<br>";
        echo $this->age ."<br>";

    }

    public static function greeting($name){    

      echo   "hello " . $name. "<br>";
    }

}

  $user1= new User('aya','aya@gmail.com', 8 );
  $user2= new User('yassmen','yassmen@gmail.com', 9 );
  $user3= new User('hossam','hossam@gmail.com', 2 );
  $user1-> getData();

  echo User:: $num ."<br>";   
  // draft 
  // <?php

  // use customer as GlobalCustomer;
  
  // class customer{
      
  //    public $name;
  //    public $email;
     
  
  //    const LEAVING_MESSAGE ="thanks";
  //    public function __construct($stuName,$stuEmail)
  //     {
  //         $this->name=$stuName;
  //         $this->email=$stuEmail;
          
        
  //     }
  //    public function getData(){
  //     echo "customer Name: ". $this->name ."<br>";
  //     echo "customer Email: ".  $this->email ."<br>";
      
  //    }
  // }
  
  // class Admin extends customer
  // {
      
  //     public $role;
  //     public function __construct($name,$email)
  //     {
  //         parent::__construct($name,$email);
  //         $this->role = $role;
  //     }
  
  //     public function getData(){
  //         echo "customer Name: ". $this->name ."<br>";
  //         echo "customer Email: ".  $this->email ."<br>";
  
  //        }
  
  // }
  // class Admin extends customer{
  //     public $role;
  //     public function setRole($role){
  //         $this->role=$role;
  //     }
  
  // }
  // echo GlobalCustomer::LEAVING_MESSAGE;
  // $admin1=new Admin('aya','ayarabih@gmail.com','alexandras');
  // $admin1-> getData();
  