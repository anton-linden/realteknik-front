<?php
include_once"../connect.php";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> set_charset('utf8');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

/*uppladdning av info till databas*/

$rubrik = mysqli_real_escape_string($conn, $_POST['rubrik']);
$text = mysqli_real_escape_string($conn, $_POST['text']);
$skola = mysqli_real_escape_string($conn, $_POST['skola']);
$bNamn = mysqli_real_escape_string($conn, $_POST['bNamn']);

$sql = "INSERT INTO projekt (rubrik, text, skola, bild) VALUES ('$rubrik', '$text', '$skola',  '$bNamn')";
$conn -> set_charset('utf8');

/*Uppladdning av bild*/

$target_dir = "../../img/projekt/";
$target_file = $target_dir . basename($_FILES["upload"]['name']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if($check !== false) { 
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["upload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else {
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file) && $conn->multi_query($sql) === TRUE ) {
        header('Location: ../asd.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}



mysqli_close($conn);

    
?>