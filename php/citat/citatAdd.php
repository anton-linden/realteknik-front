<?php
    include('../phpsession.php');

    //Create connection
     $connection = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }


/*uppladdning av info till databas*/

$text = mysqli_real_escape_string($conn, $_POST['text']);
$namn = mysqli_real_escape_string($conn, $_POST['namn']);
$om = mysqli_real_escape_string($conn, $_POST['om']);
$skola = mysqli_real_escape_string($conn, $_POST['skola']);

$sql = "INSERT INTO citat (text, namn, om, skola) VALUES ('$text', '$namn', '$om', '$skola')";
$conn -> set_charset('utf8');

if ($conn->multi_query($sql) === TRUE) {
    header('Location: Lagg-Till.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>