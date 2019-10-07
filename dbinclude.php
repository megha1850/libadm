<?php
session_start();

$con = pg_connect("host=localhost dbname=college user=postgres password=123");

// if(!$con) 
//  {
//    echo "Error: Unable to open database\n";
//  }
// else
//  {
//    echo "Opened database successfully\n";
//  }
?>