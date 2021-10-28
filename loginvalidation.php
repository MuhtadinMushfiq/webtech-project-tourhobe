<?php
include ('loginjson.php');


?>


<?php   

$name = $_POST['username'];
$password = $_POST['userpassword'];

if (empty($name))
 {
    $nameerror ='please enter your email';
}



  if (empty($password)) 
  {
      $passworderror='please enter your password';
  }



?>


<?php   
$host="localhost";
$user="root";
$password="";
$db="user";
$loginproblem=' incorrect username and password';

$data=mysqli_connect($host,$user,$password,$db);
 
if($data===false)
{
   die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $username=$_POST["username"];
   $password=$_POST["userpassword"];

   $sql="select * from login where username='".$username."' AND userpassword='".$password."' ";

   $result=mysqli_query($data,$sql);

   $row=mysqli_fetch_array($result);

   if($row["usertype"]=="customer")
   {  

      header("location:user.php");

   
   }

   elseif($row["usertype"]=="admin")
   {

      header("location:admin.php");
      

   }

   elseif($row["usertype"]=="guide")
   {

      header("location:tourguide.php");
      

   }


   else
   {

      include('Login.php');
      
   }

   
}


?>
















