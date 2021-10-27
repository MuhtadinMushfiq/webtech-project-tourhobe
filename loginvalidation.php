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

else  
{  
     if(file_exists('login.json'))  
     {  
          $current_data = file_get_contents('login.json');  
          $array_data = json_decode($current_data, true);  
          $extra = array(  
            'username'       =>     $_POST['username'],
            'userpassword'   =>     $_POST['userpassword'],
      
          );  
          $array_data[] = $extra;  
          $final_data = json_encode($array_data);  
          if(file_put_contents('login.json', $final_data))  
          {  
               $message = "<label class='text-success'>Sign up sucessfully</p>";  
          }  
     }  
     else  
     {  
          $error = 'JSON File not exits'; 
       }  
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


