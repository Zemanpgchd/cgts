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
        <form id="form" action="main.html" method="post">            
            <h1>Login</h1>
            <p>Please login</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="pwd"><b>Password</b></label>
            <input type="password" id="pwd" placeholder="Enter Password" name="pwd" required>

                <button type="submit" class="signupbtn">Login</button>
        </form> 
        <div>Dont have an account? Sign up <a href='signup_page.php'>here</a></div>

    </body>
</html>