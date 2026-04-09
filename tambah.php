<?php
    include 'koneksi.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO account (email, password, created_at) VALUES ('$email', '$password', NOW())");
    
    header("location:sso-uny-login.html");
?>