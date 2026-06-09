<?php

/* sem doplňte kód po vzoru login.php */

include "db.php";


$name = $_POST["name"];
$country = $_POST["country"];
$city = $_POST["city"];
$start_date= $_POST["start_date"];
$end_date = $_POST["end_date"];
$capacity = $_POST["capacity"];


//ověříme, zda se shoduje e-mail a heslo:
$sql = "SELECT * FROM conferences WHERE Name ='$name' "; 

// spustíme SQL dotaz na naší databázi
$result = $conn->query($sql); 

// pokud dotaz nevrátil žádné řádky -> uzivatel neni
if ($result->num_rows == 0){ 

    if ( $end_date < $start_date){
        Header("Location:conferences_add_page.php?false_time=true");    
    }
    else {
        $sql = "INSERT INTO conferences (Name, Country, Start_date, End_date, Capacity, City) VALUES ('$name', '$country', '$start_date', '$end_date', '$capacity' , '$city')"; 
        $result = $conn->query($sql);
        Header("Location:conferences_page.php");  
    }    
}

else // dotaz vrátil nějaký řádek -> ucet uz existuje
{
    Header("Location:conferences_add_page.php?already_exist=true"); 
}





/* pomocný kód */


// uložíme uživatele s těmito údaji do databáze



/* sem doplňte kód po vzoru login.php */

?>