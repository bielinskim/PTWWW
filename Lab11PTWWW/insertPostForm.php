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
        <h2>Dodaj post:</h2><hr>
        <br/>
        <form action="insertPost.php" method="post">
        <textarea rows="2" cols="100" type="text" name="postFormTitle" placeholder="Tytuł" required></textarea><br>
        <br/>
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
         
        echo "<select name='postFormCategories'>";
        if ($result->num_rows > 0) {
    
            while($row = $result->fetch_assoc()) {
        
              echo "<option value={$row["id"]}>{$row["nazwa"]}</option>";
         }
         } 
         else {
            
             echo "0 results";
           }
        echo "</select>";
        $conn->close();
        ?>
        <br><br/>
        <textarea rows="30" cols="100" name="postFormText" placeholder="Treść posta..." required></textarea>
         <br><br/>
         <button type="submit">Zapisz</button> <button onclick="window.location.href='index.php';">Powrót</button>
        </form>
        </section>
        

   </body>
</html>
