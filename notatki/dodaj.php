<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $note = $_POST["note"];
    if (!empty($note)) {
        $sql = "INSERT INTO notes (note_text) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $note);
        $stmt->execute();
        $stmt->close();
    }
    header("Location: index.php");
    exit();
}
?>
