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
    <link rel="stylesheet" type="../../text/css" href="css/login.css?<?php echo time(); ?>">

</head>
<body>
<div id="validation">
    <img id="logotype" src="../../bilder/realogo.png">
<?php
    //include('check.php');
    include_once '../connect.php';

    //Create commection
    $connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    //Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //Something was posted
        
        if(isset($_POST['del_employee']) && empty($_POST['checked_id']) == false) {
            //Delete was pressed
            $idArr = $_POST['checked_id'];
            
            //Separate ID-array
            $comma_separated = implode(",", (array)$idArr);
            
            //Delete selected brand from database
            $sql_del = "Delete FROM anvandare WHERE ID IN($comma_separated)";
            
            }
            if (mysqli_query($connection, $sql_del)) {
                echo nl2br("Borttagningen lyckades.\n <br>");
                echo "<a href='../users.php' target='_self'>Ta bort en till användare</a> <br><br>";
                echo "<a href='../index.php' target='_self'>Återvänd till adminsidan</a>";
            } 

            else {
                echo nl2br("Fel vid borttagning av användare: " . mysqli_error($connection) . ".\n");
            }
        
    }
?>
</div>
</body>
</html>