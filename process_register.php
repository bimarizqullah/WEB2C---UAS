<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $email_confirm = $_POST['email_confirm'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    $sql = "INSERT INTO tb_akun (username, email, email_confirm, password, password_confirm)
    VALUES ('$username', '$email', '$email_confirm', '$password', '$password_confirm')";

    if ($conn->query($sql) === TRUE) {
        header("Location: register.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}

    
?>