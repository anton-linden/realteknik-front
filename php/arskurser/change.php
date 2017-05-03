<?php
include_once"../connect.php";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> set_charset('utf8');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$arkurs = mysqli_real_escape_string($conn, $_POST['id']);
$text = mysqli_real_escape_string($conn, $_POST['description']);


if ( $arkurs === '1')
{
    $sql = "UPDATE ar SET arett = '$text' WHERE ID='$arkurs'";
    $conn -> set_charset('utf8');
}
elseif ( $arkurs === '2')
{
    $sql = "UPDATE ar SET artva = '$text' WHERE ID='$arkurs'";
    $conn -> set_charset('utf8');
}
elseif ( $arkurs === '3')
{
    $sql = "UPDATE ar SET artre = '$text' WHERE ID='$arkurs'";
    $conn -> set_charset('utf8');
}
elseif ( $arkurs === '4')
{
    $sql = "UPDATE ar SET arfyra = '$text' WHERE ID='$arkurs' ";
    $conn -> set_charset('utf8');
}
else {
    echo "Error";
}

if ($conn->multi_query($sql) === TRUE) {
    header('Location: andra.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>