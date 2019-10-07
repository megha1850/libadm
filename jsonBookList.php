<?php
$con = pg_connect("host=localhost dbname=library user=postgres password=123");

$sql1 = "SELECT * FROM book ORDER BY bookid DESC";
$result1 = pg_query($con,$sql1);
$row1 = pg_fetch_all($result1);
echo json_encode($row1);
?>
