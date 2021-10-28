<?php
include ('signupjson.php');

?>



<?php   

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$mail = $_POST ['email'];
$password = $_POST['userpassword'];
$cnpassword = $_POST['confirmpassword'];
$usertype = $_POST['usertype'];


if (empty($fname))
 {
    $fnameerror ='please enter your Firstname';
}

elseif (strlen($fname)<6) 
{
   $fnameerror ='your name needs atleast 6 letters';
}

if (empty($lname))
 {
    $lnameerror ='please enter your Lastname';
}

elseif (strlen($lname)<6) 
{
   $lnamerror ='your name needs atleast 6 letters';
}

if (empty($uname))
 {
    $unameerror ='please enter your username';
}


  if (empty($password)) 
  {
      $passworderror='please enter your password';
  }

elseif (strlen($password)<6) 
{
   $passworderror ='your password needs atleast 6 letters';
}

if (empty($mail))
 {
    $mailerror ='please enter your email';
}

elseif (strlen($mail)<6) 
{
   $mailerror ='your email needs atleast 6 letters';
}



if (empty($cnpassword)) 
{
    $cnpassworderror='please confirm your password';
}

elseif (strlen($cnpassword)<6) 
{
 $cnpassworderror ='your password needs atleast 6 letters';
}

?>


<?php   

$host="localhost";
$user="root";
$password="";
$db="user";


$data=mysqli_connect($host,$user,$password,$db);
 
if($data===false)
{
   die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $uname=$_POST["username"];
   $password=$_POST["userpassword"];
   $fname=$_POST["firstname"];
   $lname=$_POST["lastname"];
   $mail=$_POST["email"];
   $usertype=$_POST["usertype"];

   $sql="insert into login (username,userpassword,firstname,lastname,email,usertype) 
   values(' $uname','$password',' $fname',' $lname','$mail',' $usertype') ";
   $result=mysqli_query($data,$sql);

   if($result)
   {
      header("location:index.php");
   }
   else
   {

      include('Login.php');
      
   }

}
?>