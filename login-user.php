<?php

require_once 'db/config.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $tmp_password = $_POST['password'];
    
    $password = sha1($tmp_password);

    $query = "SELECT * FROM users_dashboard WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($password === $row['password']) {
            $_SESSION['customer_id'] = $row['customer_id'];
            header("Location: index.php");
        } else {
            header("Location: login.php?error='Incorrect Credentials'");
        }
    }
}