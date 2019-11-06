<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Podstawy technologii WWW</h1>
            <p>PHP, czyli poczatki nowej, dynamicznej znajomosci</p>
        </header>
        <nav>   
          <a  href="index.php">Strona główna</a>
          <a style="background-color:#ff6f61" href="index2.php">Druga para stron</a>
       </nav>
       <article>
        <form action="subpage.php" method="post">
         Liczba wierszy i kolumn:
        <input type="number" name="rows" placeholder="Ilosc wierszy">
        <input type="number" name="columns" placeholder="Ilosc kolumn">
          <br>
         Szerokosc i wysokosc komorek:
        <input type="number" name="rowswidth" placeholder="Szerokosc komorki">
        <input type="number" name="rowsheight" placeholder="Wysokosc komorki">
          <br>
   <p>Obramowanie komorek: </p>
  <input type="radio" name="border" value="border: 1px solid">Z obramowaniem<br>
  <input type="radio" name="border" value="">Bez obramowania<br>
   <br>
   <p>Wybierz kolor obramowania: </p>
    <select name="colour">
  <option value="red;">Czerwony</option>
  <option value="green;">Zielony</option>
  <option value="blue;">Niebieski</option>
  <option value="orange;">Pomaranczowy</option>
</select> 
   <br>
  <p>Wprowadz tekst ktory bedzie wyswietlany w komorkach: </p>
  <textarea rows="4" cols="50" name="textfield"></textarea>
   <br>
              <input type="submit">
</form>
        </article>
    </body>
</html>