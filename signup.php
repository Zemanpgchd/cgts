<?php

/* sem doplňte kód po vzoru login.php */

include "db.php";


$first_name = $_POST["first-name"];
$last_name = $_POST["last-name"];
$email= $_POST["email"];
$pwd = $_POST["pwd"];



//ověříme, zda se shoduje e-mail a heslo:
$sql = "SELECT * FROM Users WHERE Email='$email' "; 

// spustíme SQL dotaz na naší databázi
$result = $conn->query($sql); 

// pokud dotaz nevrátil žádné řádky -> uzivatel neni
if ($result->num_rows == 0){ 
    $sql = "INSERT INTO Users (FirstName, LastName, Email, Password) VALUES ('$first_name', '$last_name', '$email', '$pwd')"; 
    $result = $conn->query($sql);
    Header("Location:login_page.php");  
   
    
}
else // dotaz vrátil nějaký řádek -> ucet uz existuje
{
    Header("Location:signup_page.php?already_exist=true"); 
}





/* pomocný kód */


// uložíme uživatele s těmito údaji do databáze



/* sem doplňte kód po vzoru login.php */

?>