


<?php
include ('loginjson.php');


?>


<?php   

$uname = $_POST['username'];
$password = $_POST['userpassword'];


if (empty($uname))
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
session_start();

$data=mysqli_connect($host,$user,$password,$db);
 
if($data===false)
{
   die("connection error");
}

if(isset($_POST['login']))
{
   $uname=$_POST["username"];
   $password=$_POST["userpassword"];
  
   $sql="select * from login where username='".$uname."' AND userpassword='".$password."'   ";

   $result=mysqli_query($data,$sql);

   $row=mysqli_fetch_array($result);

   if($row["usertype"]=="customer")
   {  
      $_SESSION["username"]=$username;

      header("location:user.php");

   
   }

   elseif($row["usertype"]=="admin")
   {
      $_SESSION["username"]=$username;

      header("location:admin.php");
      

   }

   elseif($row["usertype"]=="guide")
   {
      $_SESSION["username"]=$username;

      header("location:tourguide.php");
      

   }


   else
   {

      include('Login.php');
      
   }

   
}


?>


 













