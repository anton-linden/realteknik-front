<?php
    //include('session_exit.php');
    //include('check.php');
    include_once 'php/connect.php';

    //Create connection
     $connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);
 
    //Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    
    //Employees
    $sql = "SELECT user, skola, access, ID FROM anvandare";
    $connection->set_charset("utf8");
    $result = $connection->query($sql);
?>
<!DOCTYPE html>
<html>
<body>
<head>
    <title>userlist</title>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/login.css?<?php echo time(); ?>">
    
</head>
<!-- Employees -->
            <!-- Employee form -->
            <form id="users" action="php/removeuser.php" method="post" enctype="multipart/form-data">
                <img id="logotype" src="bilder/realogo.png">
                <h2> Användare </h2>   
                <?php
                    //Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='admins'>
                                <input type='checkbox' id='checked_id' name='checked_id' value=" .$row['ID']. " />
                                <p><b>Namn</b>: " .$row['user']. "</p>
                                <p><b>Skola</b>: " .$row['skola']. "</p>
                                <p><b>Admin</b>: ". $row['access'] ."</p>
                             </div>";
                    }
                ?>
                <li><a href="login.php"> Gå tillbaka </a></li>
                <!-- Delete button -->
                <input id="button" type="submit" name="del_employee" value="Ta bort" onclick="return confirm('Är du säker?')">
            </form>
            <!-- Employee form end -->
        <!-- Employees end -->
</body>
</html>