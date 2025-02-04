<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ugy_nev"])) {
    $ugy_nev = trim($_POST["ugy_nev"]);

    if (!empty($ugy_nev)) {
        try {
            $stmt = $conn->prepare("INSERT INTO ugyek (cim) VALUES (:cim)");
            $stmt->bindParam(':cim', $cim, PDO::PARAM_STR);
            $stmt->execute();
            echo "Sikeres mentés!";
        } catch (PDOException $e) {
            echo "Hiba: " . $e->getMessage();
        }
    } else {
        echo "Hiba: Az ügy neve nem lehet üres!";
    }
} else {
    echo "Hiba: Hibás kérés!";
}
?>
