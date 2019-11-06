<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb2";
$id = $_GET['id'];
$idPosta;

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT idPosta FROM komentarze WHERE id=".$id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$idPosta = $row["idPosta"];

$sql = "DELETE FROM Komentarze WHERE id=".$id;

if($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}
else {
    echo "Error deleting record: " . $conn->error;
}


$conn->close();
header('Location: post.php?id='.$idPosta);

?>

