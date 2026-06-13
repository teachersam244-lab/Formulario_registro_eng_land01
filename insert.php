<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("No se enviaron datos desde el formulario");
}

$first_name = $_POST['name'] ?? '';
$last_name = $_POST['lastname'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

// VALIDAR CONTRASEÑA
if ($password !== $confirm_password) {
    die("Las contraseñas no coinciden");
}

// HASH (solo después de validar)
$hash = password_hash($password, PASSWORD_DEFAULT);

// INSERT
$sql = "INSERT INTO users (first_name, last_name, email, password)
VALUES ('$first_name', '$last_name', '$email', '$hash')";

if ($conn->query($sql)) {
    echo "Usuario guardado correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>