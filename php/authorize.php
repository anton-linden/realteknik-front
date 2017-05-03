<!DOCTYPE HTML>
<html lang="sv">
<head>
    <title> Registering </title>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/login.css?<?php echo time(); ?>">

</head>
<body>
    <div id="validation">
        <img id="logotype" src="../bilder/realogo.png">
<?php
    session_start();
    include_once 'connect.php';

    //Skapar anslutning
     $connection = new mysqli($servername, $username, $password, $dbname);

    //Kollar anslutning
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    
    //Hämtar värden från formuläret i login.php
    $user = $_POST['user'];
    global $user;
    $pass = $_POST['pass'];
    
    //För att skydda mot mysql injection 
    $user = stripcslashes($user);
    $pass = stripcslashes($pass);
    $user = mysqli_real_escape_string($connection, $user);
    $pass = mysqli_real_escape_string($connection, $pass);
    //$pass = md5($pass);

    //Hämtar värden från databasen
    $result = mysqli_query($connection, "SELECT id FROM anvandare WHERE user = '$user' AND pass = '$pass' ")
        or die("Failed to query database ".mysqli_error());
    
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
    //Kollar om Inputen är tom
    if(empty($user) || empty($pass)) {
        echo "Du har inte fyllt i alla fält. <br><br>";
        echo "<a href='login.php' target='_self'>Gå tillbaka</a>";
    }
    
    //Kollar om uppgifterna stämmer
    else if (mysqli_num_rows($result) ==1) {
        //Startar session
        $_SESSION['user'] = $user;
        $_SESSION['last_action'] = time();
        //Skickas till admin-sidan
        header("location: ../index.php");
    }
    
    //Om uppgifterna inte stämmer
    else {
        echo "Fel lösenord eller användarnamn <br><br>";
        echo "<a href='../login.php' target='_self'>Försök igen</a>";
    }
    
?>
    </div>
</body>
</html>