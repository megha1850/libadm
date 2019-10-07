<?php
//  $myObj = new myObj();
 include 'libraryinclude.php';

$names= $_POST['names'];
$age= $_POST['age'];
$contact_num= $_POST['contact_num'];

$query="insert into userdetails values('$names','$age','$contact_num')";
$result=pg_query($con,$query);

echo "<script>
// alert('new user added succesfully');
             window.history.go(-2);
     </script>";

//      echo "window.location.href = ".'"libhome.php"'."";

// if($result)
// {
// $myObj->flag = 1;
// $myObj->message = "libhome.php";
// echo json_encode($myObj);
// }
// else
// {
// $myObj->flag = 0;
// $myObj->message = "Error! new user entry failed";
// echo json_encode($myObj);
// }
// class myObj{

// }
 ?>