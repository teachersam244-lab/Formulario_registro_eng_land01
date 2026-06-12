<?php

include "db.php";

$first_name = $_POST['name'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (first_name, last_name, email, password)
VALUES ('$first_name', '$last_name', '$email', '$password')";

if ($conn->query($sql)) {
    echo "Usuario guardado correctamente";
} else {
    echo "Error: " . $conn->error;
}

echo "ID insertado: " . $conn->insert_id;