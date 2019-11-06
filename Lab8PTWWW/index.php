<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cwiczenie 08</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header id="header1">
            <h1>Podstawy technologii WWW</h1>
            <p>PHP, czyli poczatki nowej, dynamicznej znajomosci</p>
        </header>
        <nav>   
     <a style="background-color:#ff6f61" href="index.php">Strona główna</a>
     <a href="index2.php">Druga para stron</a>
</nav>
        <article>
        <form action="welcome.php" method="post">
            Imię: <input type="text" name="firstname"><br>
            Nazwisko: <input  type="text" name="lastname"><br>
           Wybierz kolor:   <select name="colors">
    <option value="red">Czerwony</option>
    <option value="green">Zielony</option>
    <option value="blue">Niebieski</option>
  </select>
  <br><br>
              <input type="submit">
</form>
        </article>
    </body>
</html>