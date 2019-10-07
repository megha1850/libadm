<?php
 
 include 'libraryinclude.php';
 echo "<br>";
 echo "<br>";

$bnames= $_POST['bnames'];
$bauthor= $_POST['bauthor'];

$query="insert into book values('$bnames','$bauthor')";
$result=pg_query($con,$query);

echo "<script>
window.location.href = ".'"libhome.php"'."
     </script>";
// if($result)
// {
//     echo "New Book added Successfully"; 
  
// }
// else
// {
//     echo "Error: Book entry failed"; 
// }

 ?>