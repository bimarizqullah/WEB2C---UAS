<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];
    $payment_method = $_POST['payment_method'];

    $sql = "INSERT INTO tb_pubg (user_id, item_name, price, payment_method, username)
    VALUES ('$user_id', '$item_name', '$price', '$payment_method', '$username')
    ON DUPLICATE KEY UPDATE
        item_name = VALUES(item_name),
        price = VALUES(price),
        payment_method = VALUES(payment_method),
        username = VALUES(username)";

    if ($conn->query($sql) === TRUE) {
        header("Location: pubg.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
