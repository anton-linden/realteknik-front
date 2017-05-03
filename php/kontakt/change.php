<?php
include_once"../connect.php";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> set_charset('utf8');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$namn = mysqli_real_escape_string($conn, $_POST['namn']);
$titel = mysqli_real_escape_string($conn, $_POST['titel']);
$telnum = mysqli_real_escape_string($conn, $_POST['telnum']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$skola = mysqli_real_escape_string($conn, $_POST['skola']);



    $sql = "UPDATE kontakt SET namn = '$namn', titel = '$titel', telnum = '$telnum', email = '$email'  WHERE skola='$skola'";
    $conn -> set_charset('utf8');



if ($conn->multi_query($sql) === TRUE) {
    header('Location: andra.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>