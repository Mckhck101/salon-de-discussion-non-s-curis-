<?php
$conn = new mysqli("localhost", "root", "", "chat_db");

$username = $_GET['username'] ?? '';
$message = $_GET['message'] ?? '';

// Pas de validation/sécurité ici (volontairement)
$stmt = $conn->prepare("INSERT INTO messages (username, message) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $message);
$stmt->execute();
?>
