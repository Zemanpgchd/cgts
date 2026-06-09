<?php
$host = "localhost";    // adresa serveru
$port = 3306;   
$database = "if0_41917977_cgts";   // název databáze, kterou máme vytvořenou v DBeaver
$username = "root";     // výchozí uživatel v XAMPP (je potřeba v XAMPP spustit MySQL)
$password = "";         // v XAMPP root standardně nemá heslo

// Create connection
$conn = new mysqli($host, $username, $password, $database, $port);

$_SESSION["login"] = 0;

// Check connection
if ($conn->connect_error) {
    die("Chyba připojení: " . $conn->connect_error);
}
?>