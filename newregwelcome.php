<?php
 include 'libraryinclude.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$cpwd= $_POST['cpwd'];
$first_name= $_POST['first_name'];
$contact_num= $_POST['contact_num'];

$query="SELECT * FROM register WHERE email = '$email'";
$result=pg_query($con,$query);
pg_query($con,$query);

if(pg_num_rows($result)!=1)
{
    $_SESSION["reg_success"]=false;
    $_SESSION["reg_success"]="WELCOME! Registration SUCCESSFULL";
    // echo "WELCOME! Registration SUCCESSFULL";
    header("Location:newreg.php");
    $query="insert into register values('$email','$pwd','$cpwd','$first_name','$contact_num')";
    pg_query($con,$query);
}

else
{
    $_SESSION["reg_failed"]="Registration FAILED! Use another email-id";
    
    header("Location:newreg.php");
}
// else
// {
//     header("Location:newlogin.php");
// }

?>






 <!-- echo $_POST["email"];
 echo "<br>";
 echo $_POST["pwd"];
 echo "<br>";
 echo $_POST["cpwd"];
 echo "<br>";
 echo $_POST["first_name"];
 echo "<br>";
 echo $_POST["last_name"];
 echo "<br>";
 echo $_POST["org_name"];
 echo "<br>";
 echo $_POST["contact_num"];
 echo "<br>";


 echo "WELCOME $first_name $last_name";
 echo "<br>";
 echo "<br>";
 echo "Your email address is $email";
 echo "<br>";
 echo "Your password is $pwd";
 echo "<br>";
 echo "Your confirm password is $cpwd";
 echo "<br>";
 echo "<br>";

 if("$pwd"=="$cpwd")
 {
 echo "Passwords match";
 }
else
 {
     echo "Passwords do not match";
 }

 echo "<br>";
 echo "<br>";
echo "Your first name is $first_name";
echo "<br>";
 echo "Your last name is $last_name";
echo "<br>";
echo "Your organization's name is $org_name"; echo "<br>";
echo "Your contact number is $contact_num";
echo "<br>"; -->


 