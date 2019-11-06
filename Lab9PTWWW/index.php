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
            <p>PHP; kto nie zapisuje, ten traci</p>
    </header>
    
    <article>  
        <h2>Cyberpunk 2077</h2>
        <br>
        <p>Cyberpunk 2077 jest grą RPG akcji z otwartym światem, wzbogaconą o elementy FPS-ów. Za jej stworzenie odpowiada polskie studio CD Projekt RED, które zdobyło międzynarodową sławę dzięki bestsellerowemu cyklowi Wiedźmin. Tytuł oparto na licencji Cyberpunka 2020 – gry fabularnej stworzonej w 1990 roku przez Mike’a Pondsmitha. </p>
        <br>
        <p>Akcja Cyberpunka 2077 toczy się w tytułowym roku 2077. Nie jest to jednak wizja przyszłości oparta na współczesnych wyobrażeniach, lecz dystopijny retrofuturyzm rodem z lat osiemdziesiątych XX wieku. Podczas gdy światem rządzą zachłanne megakorporacje, kontrolujące każdy aspekt życia obywateli, podziemie jest królestwem rozmaitych gangów. Ponadto dzięki postępowi technologicznemu ludzie mogą korzystać ze specjalnych wszczepów i modyfikacji ciała, zwiększających ich możliwości psychofizyczne.</p>
        <br>
        <p>Gra zabiera nas do Night City, czyli amerykańskiej metropolii położonej na północy kalifornijskiego wybrzeża, która może się „pochwalić” najwyższym wskaźnikiem przestępczości w całych Stanach Zjednoczonych. Choć bogaci obywatele zamieszkujący centrum tego wielokulturowego tygla cieszą się życiem w luksusie, stanowią oni jedynie ułamek społeczeństwa; reszta jest skazana na nędzę lub paranie się nielegalnymi zajęciami.</p>
        <br>
        <p>W trakcie zabawy wcielamy się w V, czyli początkującego najemnika (lub najemniczkę) walczącego o przetrwanie w brutalnej rzeczywistości. Źródłem inspiracji dla opowiedzianej tu historii było kino noir, a to, w jakim kierunku podąży fabuła, zależy od naszych decyzji i poczynań.
        Źródło: https://www.gry-online.pl/</p>
    </article>
         <section id="comments">
            <?php
            $comments = fopen("komentarze.txt", "r");
                    while(!feof($comments)) 
                    {
                     echo "<b>" . fgets($comments) . "</b>";
                     echo "<font size='2'>"." Dodano: " . fgets($comments) . "</font><br><br/>";
                     echo fgets($comments) . "<br><br/>";
                     echo "<hr>" ;
                     echo "<br><br/>";
                    }
                    fclose($comments);
            ?>
     </section>
    <section>
        <h2>Dodaj komentarz:</h2>
        <br/>
        <form action="dodajKomentarz.php" method="post">
        <input type="text" name="author" placeholder="Autor" required><br>
        <br/>
        <textarea rows="4" cols="50" name="comment" placeholder="Komentarz..." required></textarea>
         <br><br/>
         <button type="submit">Dodaj</button>
        </form>
     </section> 
    
    </body>
</html>
