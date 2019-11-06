<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cwiczenie 09</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <h1>Podstawy technologii WWW</h1>
            <p> PHP i SQL, czyli jak pożenić generowanie stron z bazami danych</p>
        </header>
        <article>
            <h2>Były pracownik Blizzarda o Diablo 4, Overwatch 2 i stanie firmy</h2><hr><br>
            <p class="article">W ostatnim czasie Blizzard nie jest już postrzegany jako złote dziecko branży kochane przez wszystkich graczy. Coraz częściej dochodzą nas pomruki o wewnętrznych problemach studia. Kilka dni temu jeden z byłych pracowników Blizzarda miał opublikować na łamach serwisu 4chan obszerny wpis, zawierający szereg wrażliwych informacji dotyczących stanu, w jakim znajduje się jego poprzedni pracodawca, a także szczegółów związanych z opracowywanymi przez niego projektami. Część z podanych przez niego rewelacji pokrywa się z tym, co już wiemy. Chodzi tu chociażby o cięcia budżetowe wymuszone przez Activision, trwające prace nad Diablo 4, a także serię zwolnień, która dotknęła kilkaset osób. Inne doniesienia wydają się jednak kompletnie fantastyczne i nie mają oparcia w żadnych znanych faktach lub plotkach. Jak zwykle w przypadku tego typu anonimowych wpisów, istnieje ogromne prawdopodobieństwo, że mamy do czynienia ze zwykłą fikcją. Zdarzało się jednak, że publikowane w ten sposób przecieki okazywały się w dużej mierze zgodne z prawdą.
            </p><br>
            <p class="article">Jak twierdzi anonim, obecnie atmosfera w zespole deweloperskim jest niezwykle ponura, a jego morale sięgnęło dna. Nikt z kierownictwa nie bierze pod uwagę opinii załogi i mimo jej oporów wciąż kładzie zbyt duży nacisk na e-sport. Pracownicy, którzy mają staż krótszy niż piętnaście lat, zostali postawieni pod ścianą i musieli zgodzić się na obniżkę pensji lub zrezygnować ze stanowiska i odejść z firmy. Za taki stan rzeczy odpowiadać ma w dużej mierze Activision, które domaga się cięć budżetowych i oszczędności. Wymuszony exodus załogi niesie za sobą konsekwencje. Blizzardowi zaczyna bowiem brakować specjalistów, przez co istotne stanowiska zajmują obecnie kompletnie nieprzygotowane do tego osoby, które przy podejmowaniu decyzji bez przerwy muszą konsultować się z podwładnymi. Deweloperzy, którzy zostali w studiu, skazani są na pracę ponad siły i niekończące się nadgodziny. Według zeznań źródła, z powodu stresu i bezsilności ludzie mieli otwarcie płakać na korytarzach, a jeden z grafików został wysłany na przymusowy urlop, po tym jak został przyłapany podczas próby samookaleczenia. Szefostwo ratuje się ściąganiem do pracy studentów, a także outsourcingiem. Zwolnieni artyści mieli zostać zastąpieni tańszymi pracownikami zewnętrznymi z tajskiego studia XPEC.
Źródło: https://www.gry-online.pl/</p>
       </article>
       <section>
        <h2>Dodaj komentarz:</h2><hr>
        <br/>
        <form action="insert.php" method="post">
        <input type="text" name="author" placeholder="Autor" required><br>
        <br/>
        <textarea rows="4" cols="50" name="comment" placeholder="Komentarz..." required></textarea>
         <br><br/>
         <button type="submit">Dodaj</button>
        </form>
     </section> 
        
        <section>
        <h2>Komentarze:</h2><hr><br>   
         <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nick, tresc, data FROM komentarze";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<div class='comment'>" . "<p class='datenick'>" . date("d.m.Y H:i", strtotime($row["data"])) . "<b>  " . $row["nick"]. "</b><a class='delete' href='delete.php?id=".$row["id"]."'><img src='delete.png'></a>" . "</p><br><p class='commenttext'>" . $row["tresc"]. "</p>" . "<br></div><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
      </section>
        
    </body>
</html>
