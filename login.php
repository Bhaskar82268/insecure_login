<?php
$conn = new mysqli("localhost", "root", "", "login_demo");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $conn->query("SELECT * FROM users_insecure WHERE username = '$username' AND password = '$password'");
    
    if ($res->num_rows > 0) {
        echo "Login Successful (Insecure)";
    } else {
        echo "Invalid Credentials";
    }
}
?>