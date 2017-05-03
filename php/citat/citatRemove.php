<?php
    include('../phpsession.php');

    //Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->conn _error);
    }

//kod för att ta bort rad efter ID

$idNum = mysqli_real_escape_string($conn, $_POST['ID']);

// sql to delete a record
$sql = "DELETE FROM citat WHERE id = $idNum";

if ($conn->query($sql) === TRUE) {
    header('Location: Ta-Bort.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);

?>