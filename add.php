<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["ugy_nev"])) {
    $ugy_nev = $_POST["ugy_nev"];
    
    $stmt = $conn->prepare("INSERT INTO Ugyek (ugy_nev) VALUES (:ugy_nev)");
    $stmt->bindParam(':ugy_nev', $ugy_nev);
    $stmt->execute();
}

header("Location: index.php");
exit;
?>
