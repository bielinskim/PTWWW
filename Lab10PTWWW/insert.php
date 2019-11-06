<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";
$author =  $_POST["author"];
$comment =  $_POST["comment"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO komentarze (nick, tresc)
VALUES ('$author', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: index.php');
?> 


