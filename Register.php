<?php
$conn = new mysqli("localhost", "root", "", "login_demo");
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $conn->query("INSERT INTO users_insecure (username, password) VALUES ('$username', '$password')");
    echo "Registered insecurely!";
    if ($conn->query($sql)) {
        header("Location: login.html"); 
        exit();
    } else {
       echo "Error: " . $conn->error;
    }
}
?>

