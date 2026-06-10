<?php session_start();
include "db.php"; // spojení s databází
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
            </h1>
        </div>
        <div class ="navigace">
            <nav>
                <ul>
                    <li><a <?php if(isset($_SESSION["first-name"])){echo "href=\"index.php?login=true\"";}else{echo "href=\"index.php\"";}?>>Domů</a></li>
                    <li><a href="conferences_page.php">Konference</a></li>
                <?php if (!empty($_SESSION["admin"]) && $_SESSION["admin"] == 1): ?>
                    <li><a href="conferences_add_page.php">Zadat konferenci</a></li>
                <?php endif; ?>
                </ul>
            <nav>
        </div>
        <div class="telo">
            <h1 class="products-header">Konference</h1>
                <?php
                    
                    $sql = "SELECT * FROM conferences";

                    $result = $conn->query($sql); // spuštěním SQL dotazu z databáze získáme všechny produkty


                    while ($conference = $result->fetch_assoc()) {       
                ?>
                                <!-- Zde probíhá vytváření jednotlivých položek uvnitř divu s class="item" -->
                                <div>
                                    <h2><?php echo $conference["Name"] ?></h2> <!-- Přidáme název položky -->
                                    <p>Stát: <?php echo $conference["Country"] ?></p> <!-- Přidáme cenu položky -->   
                                    <p>Město: <?php echo $conference["City"] ?></p> 
                                    <p>Začíná: <?php echo $conference["Start_date"] ?></p>     
                                    <p>Končí: <?php echo $conference["End_date"] ?></p>         
                                    <p>Kapacita: <?php echo $conference["Capacity"] ?></p>
                                        <?php
                        
                        
                        if (!empty($_SESSION["id"])) {
                            if (empty($_SESSION["conferences"]) || !in_array($conference["ConferenceID"], $_SESSION["conferences"])){
                                echo "<p>
                                        <form id='form' action='sign_to_conference.php' method='post'>
                                            <input type='hidden' name='conference_id' value='" . $conference["ConferenceID"] . "'>
                                            <button type='submit' class='signupbtn'>Přihlásit se na konferenci</button>
                                        </form>
                                    </p>";
                            } else {
                                echo "<p style='color: green; font-weight: bold;'>Na tuto konferenci jste již přihlášen/a</p>";
                            }
                            ?>  
                        </div>          
                <?php } }?>



        <div class ="noha">
            
        </div>

    </div>
    
</body>
</html>








<!-- Řazení a filtrování nás teprve čekají --> 

