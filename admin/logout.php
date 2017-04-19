<?php
    include_once '../connect.php';
    include('check.php');

    //Create connection
     $connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    //Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }    
    
    //Remove session variables
    $_SESSION = array();

    //Remove session-cookies
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    //Destroy session
    session_unset();
    session_destroy();
    
    //Close connection
    mysqli_close($connection);
 
    //Directed to login page
    header("location: ../login.php");
?>
