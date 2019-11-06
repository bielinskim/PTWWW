<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <link rel="stylesheet" href="style.css">
    <style>
        td {
             width: <?php echo $_POST["rowswidth"]; ?>px;
            height: <?php echo $_POST["rowsheight"]; ?>px;
            <?php echo $_POST["border"]; ?> <?php echo $_POST["colour"]; ?>
        }
    </style>
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
        <?php echo"<table>";
        for($i=0; $i<$_POST["rows"]; $i++)
        {
            echo"<tr>";
            for($j=0; $j<$_POST["columns"]; $j++)
            {
                echo "<td>" . $_POST["textfield"]  . "</td>";
            }
            echo"</tr>";
        }
        ?>
       </article>
    </body>
</html>