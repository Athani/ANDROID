<?php
   
  
  define('DB_HOST', 'localhost');
   define('DB_USER','root');
   define('DB_PASSWORD','');
   define('DB_NAME', 'ddproject');

  $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
  if(!$con){
    die("Failed to connect to MySQL: " . mysqli_error()); 
  } 
  $db=mysqli_select_db($con,DB_NAME) ;
  if (!$db){
       die("Failed to connect to MySQL: " . mysqli_error()); 
  }	



   if($_SERVER['REQUEST_METHOD']=='POST'){

       $firstname=$_POST['firstname'];
       $lastname=$_POST['lastname'];
       $contact=$_POST['contact'];
       $email=$_POST['email'];
       $blood_group=$_POST['blood_group'];
       $hb=$_POST['hb'];
       $wbc=$_POST['wbc'];
	   $location=$_POST['location'];

       $sql="INSERT INTO mainproject (firstname,lastname,contact,email,blood_group,hb,wbc,location) VALUES ('$firstname', '$lastname', '$contact', '$email', '$blood_group', '$hb', '$wbc', '$location');";

       $data = mysqli_query ($con,$sql);
       
       if($data) { echo "YOUR REGISTRATION IS COMPLETED..."; }

       else{
           echo ("NOT REGISTRATED". mysqli_error($con));
           exit();
       }

       mysqli_close($con);

   }



?>
