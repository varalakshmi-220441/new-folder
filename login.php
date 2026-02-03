<?php
include "db.php";
if (!isset($_POST['username'], $_POST['password'])) {
    die("Please submit the login form.");
}
function validateLogin($connection){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from users where username='$username' and password='$password'";
    $result=mysqli_query($connection,$sql);
    if(!$result){
        die("Query failed");
    }
            if(mysqli_num_rows($result)>0){
            print "Login Succssful";
        }else{
            print "Invalid Login";
        }
    }
validateLogin($connection);
?>