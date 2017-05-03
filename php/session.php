<?php
    //Include connection file
    include_once 'connect.php';

    //Create connection
     $connection = new mysqli($servername, $username, $password, $dbname);
     $connection -> set_charset('utf8');

    //Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } 

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 



    $user_check = $_SESSION['user'];

    $ses_sql = mysqli_query($connection, "SELECT user FROM anvandare WHERE user = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    $login_user = $row['user'];

$skola_access = mysqli_query($connection, "SELECT skola FROM anvandare WHERE user = '$user_check' ");

    $rowskola = mysqli_fetch_array($skola_access,MYSQLI_ASSOC);

    $skola_session = $rowskola['skola'];

$site_access = mysqli_query($connection, "SELECT access FROM anvandare WHERE user = '$user_check' ");

    $rowsite = mysqli_fetch_array($site_access,MYSQLI_ASSOC);

    $site_session = $rowsite['access'];


    if(isset($user_check) != true) {
        header("location: php/logout.php");
    }
?>