<?php

require_once 'db/config.php';

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $cphone = $_POST['cphone'];
    $customer_id = $_POST['customer_id'];
    $caddress = $_POST['caddress'];
    $tmp_password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if($tmp_password === $confirmPassword){
        $password = sha1($tmp_password);

        $query = "INSERT INTO `users_dashboard`(`customer_id`, `fullname`, `email`, `cphone`, `caddress`, `password`, `date`) VALUES ('$customer_id','$fullname','$email','$cphone','$caddress','$password',now())";

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        if($result > 0){
            echo mysqli_error($result);
            header("Location: login.php?alert=reg_s");
        }else{
        header("Location: register.php?alert=reg_f");
    }

    }
}