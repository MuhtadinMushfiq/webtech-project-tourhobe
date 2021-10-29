
<?php
include ('signupjson.php');

?>



<?php   

$firstname = $_POST['firstname'];
$lastnamename = $_POST['lastname'];
$usernamename = $_POST['username'];
$usertype = $_POST['usertype'];
$email = $_POST ['email'];
$userpassword = $_POST['userpassword'];
$confirmpassword = $_POST['confirmpassword'];

$signupproblem='please signup properly';

if (empty($firstname))
 {
    $fnameerror ='please enter your Firstname';
}

elseif (strlen($firstname)<6) 
{
   $fnameerror ='your name needs atleast 6 letters';
}

if (empty($lastname))
 {
    $lnameerror ='please enter your Lastname';
}

elseif (strlen($lastname)<6) 
{
   $lnamerror ='your name needs atleast 6 letters';
}

if (empty($username))
 {
    $unameerror ='please enter your username';
}


  if (empty($userpassword)) 
  {
      $passworderror='please enter your password';
  }

elseif (strlen($userpassword)<6) 
{
   $passworderror ='your password needs atleast 6 letters';
}

if (empty($email))
 {
    $mailerror ='please enter your email';
}

elseif (strlen($email)<6) 
{
   $mailerror ='your email needs atleast 6 letters';
}



if (empty($confirmpassword)) 
{
    $cnpassworderror='please confirm your password';
}

elseif (strlen($confirmpassword)<6) 
{
 $cnpassworderror ='your password needs atleast 6 letters';
}
include('signup.php');

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
if(empty( $fnameerror)&&empty( $lnameerror)&&empty( $unameerror)&&empty( $mailerror)&&empty( $cnpassworderror) )

{

   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
      $username=$_POST["username"];
      $userpassword=$_POST["userpassword"];
      $firstname=$_POST["firstname"];
      $lastname=$_POST["lastname"];
      $email=$_POST["email"];
      $usertype=$_POST["usertype"];
   
      $confirmpassword=$_POST["confirmpassword"];
      
      $sql="insert into login (username,userpassword,firstname,lastname,email,usertype,confirmpassword) 
      values(' $username','$userpassword',' $firstname',' $lastname','$email',' $usertype','$confirmpassword') ";
      $result=mysqli_query($data,$sql);
   
      if($result)
      {
         header("location:index.php");
      }

}

  
      else
      {
   
         include('signup.php');
         
      }
   
   

}




?>



