<?php
include 'db_web.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $zone_id = $_POST['zone_id'];
    $username = $_POST['username'];

    $stmt = $conn->prepare("INSERT INTO users (user_id, zone_id, username) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user_id, $zone_id, $username);

    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
