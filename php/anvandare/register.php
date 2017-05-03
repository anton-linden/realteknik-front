<?php
    include('../phpsession.php');

    //Create connection
     $connection = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
?>
<!DOCTYPE HTML>
<html lang="sv">
<head>
    <title> Registering </title>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/login.css?<?php echo time(); ?>">

</head>
<body>
<div id="validation">
    <img id="logotype" src="bilder/realogo.png">
<?php
    //session_start();
    include_once 'connect.php';

    //Skapar anslutning
    $connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    //Kollar anslutning
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    //Hämtar värden från formuläret i login.php
    
        $user = ($_POST['user']);
        //global $user;
        $pass = ($_POST['pass']);
        $pass2 = ($_POST['pass2']);
        $selectbox1 = ($_POST['selectbox1']);
        $selectbox2 = ($_POST['selectbox2']);
        
        //För att skydda mot mysql injection 
        $user = stripcslashes($user);
        $pass = stripcslashes($pass);
        $pass2 = stripcslashes($pass2);
        $selectbox1 = stripcslashes($selectbox1);
        $selectbox2 = stripcslashes($selectbox2);
        $user = mysqli_real_escape_string($connection, $user);
        $pass = mysqli_real_escape_string($connection, $pass);
        $pass2 = mysqli_real_escape_string($connection, $pass2);
        $selectbox1 = mysqli_real_escape_string($connection, $selectbox1);
        $selectbox2 = mysqli_real_escape_string($connection, $selectbox2);
        
        //Kollar om alla fält är ifyllda
        if (empty($user) || empty($pass) || empty($pass2)) {
            echo "Du har inte fyllt i alla fält. <br><br>";
            echo "<a href='signup.php' target='_self'>Gå tillbaka</a>";
        }
        
        //Kollar så att lösenorden stämmer överens
        else if($pass == $pass2) {
            //skapar ny användare
            $pass = md5($pass);
            $sql = "INSERT INTO anvandare(user, pass, skola, access) VALUES('$user', '$pass', '$selectbox1', '$selectbox2')";
            $connection->set_charset("utf8");
            mysqli_query($connection, $sql);
            //$_SESSION['message'] = "Användare skapad";
            //$_SESSION['user'] = $user;
            echo "Ny användare har skapats! <br><br>";
            echo "<a href='../signup.php' target='_self'>Skapa en till användare</a> <br><br>";
            echo "<a href='../index.php' target='_self'>Återvänd till adminsidan</a>";
        }

        else{
            //felmeddelande
            //$_SESSION['message'] = "Lösenorden stämmer inte överens";
            echo "Lösenorden är inte likadana <br><br>";
            echo "<a href='../signup.php' target='_self'>Försök igen</a>";
        }
    
?>
</div>
</body>
</html>