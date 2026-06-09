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
                $_SESSION["login"] = 1;
            }
        ?>
            
        </div>
        <div class ="navigace">
            <nav>
                <ul>
                    <li><a href="#" class="active">Domů</a></li>
                    <li><a href="conferences_page.php">Konference</a></li>
                <?php if (!empty($_SESSION["admin"]) && $_SESSION["admin"] == 1): ?>
                    <li><a href="conferences_add_page.php">Zadat konferenci</a></li>
                <?php endif; ?>
                </ul>
            <nav>
        </div>
        <div class ="noha">
            <?php echo "<pre>";
            print_r($_SESSION);
            echo "</pre>"; 
?>
        </div>

    </div>
    
</body>
</html>