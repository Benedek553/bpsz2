<?php
$serverName = "tcp:bpsz.database.windows.net,1433";
$database = "bpsz";
$username = "sqladmin";
$password = "Password2024";

try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kapcsolati hiba: " . $e->getMessage());
}
?>
