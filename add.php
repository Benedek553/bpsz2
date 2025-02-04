<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cim"])) {
    $cim = trim($_POST["cim"]);

    if (!empty($cim)) {
        try {
            $stmt = $conn->prepare("INSERT INTO Ugyek (cim) VALUES (:cim)");
            $stmt->bindParam(':cim', $cim, PDO::PARAM_STR);
            $stmt->execute();
            echo "Sikeres mentés!";
        } catch (PDOException $e) {
            echo "Hiba: " . $e->getMessage();
        }
    } else {
        echo "Hiba: A cím nem lehet üres!";
    }
} else {
    echo "Hiba: Hibás kérés!";
}
?>
