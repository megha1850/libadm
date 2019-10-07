<?php
include 'libraryinclude.php';


$bnames= $_POST['bnames'] ;
$bauthor= $_POST['bauthor'] ;

$bookid= $_GET['id'] ;

$query="UPDATE book SET bnames = '$bnames' ,bauthor = '$bauthor' WHERE bookid ='$bookid'";

$result= pg_query($con,$query);

echo "<script>
window.location.href = ".'"libhome.php"'."
     </script>";

// echo  "Book Name :  $bnames";
// echo "<br>";
// echo  "Book Author:  $bauthor";
// echo "<br>";echo "<br>";
// echo "BOOK DETAILS UPDATED SUCCESSFULLY";
?>
