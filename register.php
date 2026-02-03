<?php
include "db.php";
if (!isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    die("Please submit the registration form.");
}
static $count = 0;
$count++;
function registerUser($connection){
    $username = $_POST['username'];   // string
    $email = $_POST['email'];         // string
    $password = $_POST['password'];   // string
    $success = false;
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if (mysqli_query($connection, $sql)) {
        $success = true;
        echo "Registration Successful<br>";
    } else {
        die("Registration Failed");
    }

    return $success;
}

$result = registerUser($connection);
echo "Total registrations in this request: " . $count;
?>
