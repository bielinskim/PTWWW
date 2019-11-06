<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cwiczenie 11</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <h1>Podstawy technologii WWW</h1>
            <p>  PHP i SQL, więcej, więcej!, więcej!!…. tabel i funkcjonalności.</p>
        </header>
         <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb2";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nazwa FROM kategorie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<nav>";
    while($row = $result->fetch_assoc()) {
        
        echo "<a class='anav' href='index.php?id={$row["id"]}'>" .$row["nazwa"] . "</a>";
    }
    echo "<a class='anav' href='index.php'>Wszystkie</a>";
}
else {
    echo "0 results";
}  
   echo "</nav>";

$sql = "SELECT p.id, p.tytul, k.nazwa, p.data FROM posty p, kategorie k WHERE p.idKategorii = k.id";

if (isset($_GET["id"])) {
    
    $sql .=" AND p.idKategorii = ".$_GET["id"];
    
    }
echo "<section>";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    echo "<table>";
    echo "<th>ID</th><th>Tytuł</th><th>Kategoria</th><th>Data</th><th> </th><th> </th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td><td>" . "<a href=post.php?id=" . $row["id"] . ">" . $row["tytul"] . "</a>" ."</td><td>". $row["nazwa"] ."</td><td>". $row["data"] . "</td>";
        echo "<td><a class='edit' href='edit.php?id=".$row["id"]."'><img src='edit.png'></a></td>";
        echo "<td><a class='delete' href='delete.php?id=".$row["id"]."'><img src='delete.png'></a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?> 
        <a class="addPost" href='insertPostForm.php'>Dodaj post</a>
        </section>
    </body>
</html>
