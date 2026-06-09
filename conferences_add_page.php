<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zadání konference</title>
        <link rel="stylesheet" href="cgts.css"> <!-- Zde propojíme s CSS souborem. -->
        
    </head>
    <body>
        <button id="darkmodebtn"><img src="darkmode.png" id="darkmodeimg"></button>
        <form id="form" action="conferences_add.php" method="post">            
            <h1>Zadání konference</h1>
            <p>Prosím zadejte novou konferenci</p>
            <hr>
            <label for="name"><b>Název</b></label>
            <input type="text" placeholder="Konference cgts" name="name" required>

            <label for="country"><b>Stát</b></label>
            <input type="text" placeholder="Česko" name="country" required>

            <label for="city"><b>Město</b></label>
            <input type="text" placeholder="Praha" name="city" required>

            <label for="start_date"><b>Datum zahájení</b></label>
            <input type="date"  placeholder="1.1.2026" name="start_date" required>

            <label for="end_date"><b>Datum ukončení</b></label>
            <input type="date"  placeholder="1.1.2026" name="end_date" required>


            <label for="capacity"><b>Kapacita</b></label>
            <input type="number" placeholder="50" name="capacity" required>


            <div class="button-container">
                <button type="submit" class="signupbtn">Zadat konferenci</button>
            </div>
        <?php
            if(isset($_GET["already_exist"])) // uživatel zadal špatné heslo, jinak parametr pwd v URL není nastaven
            {
                echo "<p style='color:red; text-align:center;'>Tato konference již existuje!</p>";
            }
            if(isset($_GET["false_time"])) // uživatel zadal špatné heslo, jinak parametr pwd v URL není nastaven
            {
                echo "<p style='color:red; text-align:center;'>Konference musí začínat dříve než končí!</p>";
            }

        ?>
        </form> 
    </body>
</html>