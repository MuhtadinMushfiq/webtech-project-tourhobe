


<?php
include ('loginjson.php');


?>


<?php   

$username = $_POST['username'];
$userpassword = $_POST['userpassword'];


if (empty($username))
 {
    $nameerror ='please enter your email';
}



  if (empty($userpassword)) 
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
   $username=$_POST["username"];
   $userpassword=$_POST["userpassword"];
  
   $sql="select * from login where username='".$username."' AND userpassword='".$userpassword."'   ";

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


 













