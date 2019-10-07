<?php

include 'libraryinclude.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];


$query="SELECT * FROM register WHERE email = '$email' AND pwd = '$pwd'";
$result=pg_query($con,$query);

if(pg_num_rows($result) != 1)
{
    $_SESSION["logged_in"]=false;
    // echo "LOGIN FAILED! Enter valid email-id and password"; 
}
 else
  {
      $_SESSION["logged_in"]=true;
      $_SESSION['email']=$email;
      
    // echo "WELCOME! LOGIN SUCCESSFULL";   
  }

if ($_SESSION["logged_in"]!=true)
{
    $_SESSION["login_failed"]="LOGIN FAILED! Enter valid email-id and password";
    header("Location:newlogin.php");
}
else
{
    header("Location:libhome.php");
}



?>