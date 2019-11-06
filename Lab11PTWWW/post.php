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
$result = $conn->query("SELECT idKategorii FROM posty WHERE id = $id");
$row = $result->fetch_assoc();
$idKategorii = $row["idKategorii"];
$result = $conn->query("SELECT * FROM kategorie WHERE id = $idKategorii");      
$row = $result->fetch_assoc();

echo "<h1 class='categoryHeader'>". $row["nazwa"] ."</h1>";        

$result = $conn->query("SELECT * FROM posty WHERE id = $id");
$row = $result->fetch_assoc();
        echo "<section class='postSection'>";
        echo "<h2>". $row["tytul"] ."</h2><hr><br>";
        echo "<p><font size='+1'>". $row["tresc"] ."</font></p><br><br>";
        echo "<p>Napisano: ". $row["data"] ."</p>";
?>
<br><hr><br>    
<h2 id="comments">Komentarze</h2><br/>

<form action="insertComment.php?id=<?php echo($_GET["id"]); ?>" method="post">
<input type="text" name="commentFormAuthor" placeholder="Autor" required><br>
<br/>
<textarea rows="4" cols="50" name="commentFormText" placeholder="Komentarz..." required></textarea>
<br><br>

<button type="submit">Dodaj</button>
</form>
<br><br>     
<?php
$result = $conn->query("SELECT * FROM komentarze WHERE idPosta = $id");
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<h3>". $row["nick"] ."<a class='delete' href='deleteComment.php?id=".$row["id"]."'><img src='delete.png'></a></h3><hr><br>";  
        echo "<p>". $row["tresc"] ."</p><br>"; 
        echo "<p><font size='-1'>". $row["data"] ."</font></p><br><br>"; 
    }
} else {
    echo "Brak komentarzy";
} 

$conn->close();
?>
  </section>
 </body>
</html>
