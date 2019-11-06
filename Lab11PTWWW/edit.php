<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cwiczenie 11</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
         <a href='index.php'><header>
            <h1>Podstawy technologii WWW</h1>
            <p>  PHP i SQL, więcej, więcej!, więcej!!…. tabel i funkcjonalności.</p>
        </header></a>
        <section>
        <h2>Edytuj post:</h2><hr><br>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb2";
$id = $_GET["id"];

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   
$result = $conn->query("SELECT * FROM Posty WHERE id = $id");
$row = $result->fetch_assoc();

echo "<form action='editPost.php?id=".$id."' method='post'>";
echo "<h3>Tytuł:</h3><br><textarea name='editTitle' rows='2' cols='100'>" . $row["tytul"] . "</textarea><br><br>";
echo "<h3>Treść:</h3><br><textarea name='editText' rows='30' cols='100'>" . $row["tresc"] . "</textarea><br>";
echo "<button type='submit'>Zapisz zmiany</button>";

$conn->close();
?>
     </section>
   </body>
</html>

