<?php
$conn = new mysqli("localhost", "root", "", "chat_db");
$res = $conn->query("SELECT * FROM messages ORDER BY id DESC LIMIT 20");
$messages = array();
while ($row = $res->fetch_assoc()) {
    echo "<p><strong>" . htmlspecialchars($row['username']) . ":</strong> " . htmlspecialchars($row['message']) . "</p>";
}
?>
