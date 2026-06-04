<?php
$host = "127.0.0.1";    // adresa serveru
$port = 3307;   
$database = "cgts";   // název databáze, kterou máme vytvořenou v DBeaver
$username = "root";     // výchozí uživatel v XAMPP (je potřeba v XAMPP spustit MySQL)
$password = "";         // v XAMPP root standardně nemá heslo

// Create connection
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Chyba připojení: " . $conn->connect_error);
}
?>