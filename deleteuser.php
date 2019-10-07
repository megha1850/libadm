<?php
include 'libraryinclude.php';


// $names= $_POST['names'] ;
// $age= $_POST['age'] ;
// $contact_num= $_POST['contact_num'] ;

$userid= $_GET['id'] ;

$query="DELETE FROM userdetails WHERE userid =$userid";
$result= pg_query($con,$query);

echo "<script> 
             window.location.href = ".'"libhome.php"'."
     </script>";
?>