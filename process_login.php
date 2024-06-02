<?php
include 'config.php';
// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mendapatkan data dari permintaan POST
$data = json_decode(file_get_contents("php://input"));

$email = $data->email;
$password = $data->password;

// Menyiapkan dan menjalankan pernyataan SQL
$sql = "SELECT * FROM tb_akun WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(array("status" => "success", "message" => "Login berhasil!"));
} else {
    echo json_encode(array("status" => "fail", "message" => "Email atau kata sandi salah!"));
}

$stmt->close();
$conn->close();
?>
