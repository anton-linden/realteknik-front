<?php
    include_once '../connect.php';
    include('check.php');

    //Create connection
     $connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    //Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
   
    //session_start();

    //Expire the session if user is still inactive after 15 minutes
    $expireAfter = 15;

    //Check to see if our "last action" session variable has been set
    if(isset($_SESSION['last_action'])) {
        //Figure out how many seconds have passed since the user was last active
        $secondsInactive = time() - $_SESSION['last_action'];
        
        //Convert our minutes into seconds
        $expireAfterSeconds = $expireAfter * 60;
        
        //Check to see if they have been inactive for too long
        if($secondsInactive >= $expireAfterSeconds) {
            //User has been inactive for too long and session is terminated
            
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
        }
    }
?>