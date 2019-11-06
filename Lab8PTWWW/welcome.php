<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <link rel="stylesheet" href="style.css">
    <style>
         #p1 {
            color: <?php echo $_POST["colors"]; ?>;
         }
     </style>
    </head>
    <body>
        <header>
            <h1>Podstawy technologii WWW</h1>
            <p>PHP, czyli poczatki nowej, dynamicznej znajomosci</p>
        </header>
        <nav>   
     <a style="background-color:#ff6f61" href="index.php">Strona główna</a>
     <a href="index2.php">Druga para stron</a>
</nav>
        <article>
        <p id="p1" >Witaj <?php echo $_POST["firstname"]; ?> <?php echo $_POST["lastname"]; ?> <br></p>

    <a id="a1" href="index.php">Powrót</a>
        </article>
    </body>
</html>