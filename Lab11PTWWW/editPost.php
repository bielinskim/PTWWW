<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb2";
$id = $_GET["id"];

$newtitle = $_POST["editTitle"];
$newtext = $_POST["editText"];

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE Posty SET tytul='" . $newtitle . "', tresc='" . $newtext . "' WHERE id=" . $id;

if ($conn->query($sql)) {
    echo "New record created successfully";
} 
else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: post.php?id='.$id);

?>

