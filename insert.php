<?php

include "db.php";

$first_name = $_POST['name'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST ['confirm_password'];

if ($password !== $confirm_password) {
    echo "Las contraseñas no coinciden";
    exit;
}
echo $confirm_password;
exit;

$sql = "INSERT INTO users (first_name, last_name, email, password, confirm_password)
VALUES ('$first_name', '$last_name', '$email', '$password', '$confirm_password')";

if ($conn->query($sql)) {
    echo "Usuario guardado correctamente";
} else {
    echo "Error: " . $conn->error;
}

