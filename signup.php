<!DOCTYPE html>
<html lang="sv">
<head>
    <title> Registering </title>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/login.css?<?php echo time(); ?>">
    
</head>
<body>
    <form action="php/register.php" method="post">
        <img id="logotype" src="bilder/realogo.png">
        <p>
            <label> Användarnamn: </label>
            <input type="text" autocomplete="off" id="user" name="user" />
        </p>
        <p>
            <label> Lösenord: </label>
            <input type="password" autocomplete="off" id="pass" name="pass" />
        </p>
        <p>
            <label> Bekräfta lösenord: </label>
            <input type="password" autocomplete="off" id="pass" name="pass2" />
        </p>
        <p>
            <label> Skola: </label>
            <select name="selectbox1">
                <option value="Gävle" id="skola" name="skola">Gävle</option>
                <option value="Norrköping" id="skola" name="skola">Norrköping</option>
                <option value="Linköping" id="skola" name="skola">Linköping</option>
            </select>
        </p>
        <p>
            <label> Status: </label>
            <select name="selectbox2">
                <option value="Global admin" id="access" name="access">Global Admin</option>
                <option value="Gävle admin" id="access" name="access">Gävle Admin</option>
                <option value="Norrköping admin" id="access" name="access">Norrköping Admin</option>
                <option value="Linköping admin"id="access" name="access">Linköping Admin</option>
            </select>
        </p>
        <li><a href="login.php"> Gå tillbaka </a></li>
        <p>
            <input type="submit" id="button" value="Skapa" />
        </p>
    </form>
</body>
</html>