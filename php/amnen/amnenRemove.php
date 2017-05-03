<?php
    include('../phpsession.php');

    //Create connection
     $connection = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

//kod för att ta bort rad efter ID

$idNum = mysqli_real_escape_string($conn, $_POST['ID']);

// sql to delete a record
$sql = "DELETE FROM amnen WHERE id = $idNum";

if ($conn->query($sql) === TRUE) {
    header('Location: ../asd.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);

?>