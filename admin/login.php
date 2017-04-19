<!DOCTYPE html>
<html lang="sv">

<head>
    <title> Login Page </title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="admin/css/login.css?<?php echo time(); ?>">

</head>

<body>
    <form action="authorize.php" method="post">
        <img id="logotype" src="img/realgymnasiet_svart_logo_gron_bakgrund.png" height="30%" width="50%">
        <p>
            <label> Username: </label>
            <input type="text" autocomplete="off" id="username" name="username" />
        </p>
        <p>
            <label> Password: </label>
            <input type="password" autocomplete="off" id="password" name="password" />
        </p>
        <p>
            <input type="submit" id="button" value="Login" />
        </p>
    </form>
</body>

</html>
