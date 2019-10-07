<?php
session_start();
$con = pg_connect("host=localhost dbname=library user=postgres password=123");
if(!isset($_SESSION['logged_in']))
{
    $_SESSION['logged_in'] = false;
}
if(!isset($_SESSION['reg_in']))
{
    $_SESSION['reg_in'] = false;
}
if(!isset($_SESSION['reg_success']))
{
    $_SESSION['reg_success'] = false;
}
// if(!$con) 
//  {
//    echo "Error: Unable to open database\n";
//  }
// else
//  {
//    echo "Opened database successfully\n";
//  }

?>
