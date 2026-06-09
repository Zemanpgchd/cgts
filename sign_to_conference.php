<?php
session_start();
include "db.php";

$conferenceID = $_POST["conference_id"];

// Ujistíme se, že pracujeme s polem
if (!isset($_SESSION["conferences"]) || !is_array($_SESSION["conferences"])) {
    $_SESSION["conferences"] = [];
}

// Přidáme ID do pole pouze pokud tam ještě není
if (!in_array($conferenceID, $_SESSION["conferences"])) {
    $_SESSION["conferences"][] = $conferenceID;
}

// Převedeme pole na čistý text oddělený čárkami (např. "1,10") pro databázi
$conferences_string = implode(',', $_SESSION["conferences"]);
$userID = $_SESSION["id"];

// Uložení do DB - upraveno velkými písmeny podle tvého souboru s přihlášením (Users, UserID)
$sql = "UPDATE Users 
        SET Conferences = '$conferences_string' 
        WHERE UserID = '$userID'";

$result = $conn->query($sql);

// Návrat na přehled konferencí - teď už bezpečně mimo cyklus!
header("Location: conferences_page.php");
exit();
?>