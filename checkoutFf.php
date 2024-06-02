<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];
    $payment_method = $_POST['payment_method'];

    $sql = "INSERT INTO tb_ff (user_id, username, item_name, price, payment_method) 
            VALUES ('$user_id', '$username', '$item_name', '$price', '$payment_method')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ff.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
