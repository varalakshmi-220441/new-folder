<?php
$host="localhost:3307";
$user="root";
$password="";
$dbname="userdb";

$connection=mysqli_connect($host,$user,$password,$dbname);
if(!$connection){
    die("Database connection failed");
}
echo "Database connected successfully";
?>