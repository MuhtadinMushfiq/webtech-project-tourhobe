<?php   

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$mail = $_POST ['email'];
$password = $_POST['password'];
$cnpassword = $_POST['confirmpassword'];



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
   $lnameerror ='your name needs atleast 6 letters';
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

else  
{  
     if(file_exists('data.json'))  
     {  
          $current_data = file_get_contents('signup.json');  
          $array_data = json_decode($current_data, true);  
          $extra = array(  
            'firstname'       =>     $_POST['firstname'],
            'lastname'        =>     $_POST['lastname'],
            'password'        =>     $_POST['password'],  
            'confirmpassword' =>     $_POST["confirmpassword"],  
            'email'           =>     $_POST["email"],
             
          );  
          $array_data[] = $extra;  
          $final_data = json_encode($array_data);  
          if(file_put_contents('signup.json', $final_data))  
          {  
               $message = "<label class='text-success'>Sign up sucessfully</p>";  
          }  
     }  
     else  
     {  
          $error = 'JSON File not exits'; 
       }  
}  


if (empty($fnameerror) && empty($lnameerror) && empty($passworderror) && empty($mailerror) && 
empty($cnpassworderror) && empty('')) 
{
  include('success.php');
}



else
{
   include('Signup.php');
}

  //include('index.php');


 

 ?>


