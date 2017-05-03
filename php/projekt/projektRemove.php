<?php   
include_once'../connect.php';
 
$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> set_charset('utf8');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//kod för att ta bort rad efter ID

$idNum = mysqli_real_escape_string($conn, $_POST['ID']);

// sql to delete a record
$sql = "DELETE FROM projekt WHERE id = $idNum";

if ($conn->query($sql) === TRUE) {
    header('Location: ../asd.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);

?>