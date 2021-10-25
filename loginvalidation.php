<?php   

$name = $_POST['username'];
$password = $_POST['userpassword'];

if (empty($name))
 {
    $nameerror ='please enter your email';
}

elseif (strlen($name)<6) 
{
   $nameerror ='your username needs 6 letters';
}

  if (empty($password)) 
  {
      $passworderror='please enter your password';
  }

elseif (strlen($password)<6) 
{
   $passworderror ='your username needs 6 letters';
}

if (empty($nameerror) && empty($passworderror)) 
{
  include('success.php');
}

else
{
   include('Login.php');
}

  //include('index.php');


 

 ?>


