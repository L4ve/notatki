<?php
include("db.php");

$sql = "SELECT * FROM notes ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='note'>" . $row["note_text"] . "</div>";
    }
}

$conn->close();
?>
