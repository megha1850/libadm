<?php
include 'libraryinclude.php';

$bookid= $_GET['id'] ;

$query="DELETE FROM book WHERE bookid =$bookid";
$result= pg_query($con,$query);

echo "<script> 
window.location.href = ".'"libhome.php"'."
     </script>";
?>