<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <h1 class="logo">Aplikacja od edytowanie pracowników</h1>
    

    <div class="nav">
        <div class="containter"> 
            <h2 class="wybrany">Wybrałeś opcje edytowania pracowników</h2>
            <a href="../index.php" class="powrot">Powrót do strony głównej</a>
            <form action="edytuj2.php" method="post">
                <label for="numerid" class="podnum">Podaj numer pracownika do edycji:</label>
                <input type="number" name="numid" id="numid" >
                <input type="submit" value="Przejdź do edycji" name="p" class="przycisk_edycja">
            </form>
        </div>
    </div>

    <section class="hero">
        <div class="container">

        </div>
    </section>

</body>
</html>''