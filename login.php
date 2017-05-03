<!DOCTYPE html>
<html lang="sv">
<head>
    <title> Login Page </title>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/login.css?<?php echo time(); ?>">
    
</head>
<body>
    <form class="users" action="php/authorize.php" method="post">
        <img id="logotype" src="bilder/realogo.png">
        <p>
            <label> Användarnamn: </label>
            <input type="text" autocomplete="off" id="user" name="user" />
        </p>
        <p>
            <label> Lösenord: </label>
            <input type="password" autocomplete="off" id="pass" name="pass" />
            <li><a href="signup.php"> Skapa ny användare </a></li><br><br>
            <li><a href="users.php"> Hantera användare </a></li>
        </p>
        <p>
            <input type="submit" id="button" value="Login" />
        </p>
    </form>
</body>
</html>


