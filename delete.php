<?php
require 'db.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $stmt = $conn->prepare("DELETE FROM Ugyek WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

header("Location: index.php");
exit;
?>
