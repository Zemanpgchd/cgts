<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cgts.css">
    <title>Ceska geotechnicka spolecnost</title>
</head>
<body>
    <div class="hlavni">
        <div class="zahlavi">
            <img src="logo.png">
            <h1>Česká geotechnická společnost</h1>
            <form action="login_page.php" method="get">
                <button type="submit" class="button">Login a signup</button>
            </form>
        </div>
        <div class="telo">
            <h1>
             <?php
            if(isset($_GET["login"])) // uživatel zadal špatné heslo, jinak parametr pwd v URL není nastaven
            {
                echo "Welcome " . $_SESSION["first-name"];
            }
        ?>
            
        </div>
        <div class ="navigace">
            <nav>
                <ul>
                    <li><a href="#" class="active">Domů</a></li>
                    <li><a href="#">Politika</a></li>
                    <li><a href="#">Technologie</a></li>
                    <li><a href="#">Sport</a></li>
                    <li><a href="#">Kultura</a></li>
                </ul>
            <nav>
        </div>
        <div class ="noha">
            
        </div>

    </div>
    
</body>
</html>