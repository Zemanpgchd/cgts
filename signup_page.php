<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="cgts.css"> <!-- Zde propojíme s CSS souborem. -->
        
    </head>
    <body>
        <button id="darkmodebtn"><img src="darkmode.png" id="darkmodeimg"></button>
        <form id="form" action="signup.php" method="post">            
            <h1>Signup</h1>
            <p>Please sign up</p>
            <hr>
            <label for="first-name"><b>First Name</b></label>
            <input type="text" placeholder="Jan" name="first-name" required>

            <label for="last-name"><b>Last Name</b></label>
            <input type="text" placeholder="Novák" name="last-name" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="pwd"><b>Password</b></label>
            <input type="password" id="pwd" placeholder="Enter Password" name="pwd" required>

            <label for="pwd-repeat"><b>Repeat Password</b></label>
            <input type="password" id="pwd-repeat" placeholder="Repeat Password" name="pwd-repeat" required>


            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="button-container">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        <?php
            if(isset($_GET["already_exist"])) // uživatel zadal špatné heslo, jinak parametr pwd v URL není nastaven
            {
                echo "<p style='color:red; text-align:center;'>Již máte účet!</p>";
            }
        ?>
        </form> 
        <div>Already have an account? Log in <a href='login_page.php'>here</a></div>

    </body>
</html>