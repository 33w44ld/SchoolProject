<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>

    <h1 class="logo">Aplikacja od edytowanie pracowników</h1>
    

    <div class="nav">
        <div class="containter"> 
            <h2 class="wybrany">Wybrałeś opcje dodawania pracowników</h2>
            <a href="../index.php" class="powrot">Powrót do strony głównej</a>
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <form class="dodawanie" action="" method="post">
                <label for="imie">Podaj imię pracownika:</label>
                <input type="text" name="imie" id="imie">
                <label for="nazw">Podaj nazwisko pracownika:</label>
                <input type="text" name="nazw" id="nazw">
                <label for="wiek">Podaj wiek pracownika:</label>
                <input type="number" name="wiek" id="wiek">
                <label for="staz">Podaj staż pracownika:</label>
                <input type="number" name="staz" id="staz">
                <label for="stan">Podaj  stanowiska pracownika:</label>
                <input type="text" name="stan" id="stan">
                <label for="wydz">Podaj wydział pracownika:</label>
                <select name="wydz" id="wydz">
                    <option value="Magazyn">Magazyn</option>
                    <option value="Logistyczny">Logistyczny</option>
                    <option value="Informatyczny">Informatyczny</option>
                    <option value="Zarzad">Zarząd</option>
                    <option value="Sprzątania">Sprzątania</option>
                    <option value="Kuchnia">Kuchnia</option>
                </select>
                <label for="pensja">Podaj pensje pracownika:</label>
                <input type="number" name="pensja" id="pensja">
                <input type="submit" value="Dodaj" name="p" class="przycisk">
            </form>
            <?php

                if(isset($_POST['p']))
                {
                    include('polaczenie.php');
                    polacz();
                    $data=date("Y-m-d");
                    $imie=$_POST['imie'];
                    $nazw=$_POST['nazw'];
                    $wiek=$_POST['wiek'];
                    $staz=$_POST['staz'];
                    $stan=$_POST['stan'];
                    $wydz=$_POST['wydz'];
                    $pens=$_POST['pensja'];
                    if(empty($imie) || empty($nazw) || empty($wiek) || empty($staz) || empty($stan) || empty($wydz) || empty($pens)) echo"<h2>Wypełnij wszystkie pola</h2>";
                    else
                    {
                        if($wiek<15||$wiek>80) echo"<h2>Podaj prawdziwy wiek</h2>";
                        else
                        {
                            if($wiek-$staz < 14) echo"<h2>Jesteś za młody</h2>";
                            else
                            {
                                if(strlen($imie)<2 && strlen($nazw)<2) echo"<h2>Za krótkie imię lub nazwisko</h2>";
                                else
                                {
                                    $zap="INSERT INTO pracownicy VALUES(NULL,'$imie','$nazw','$wiek','$staz','$stan','$wydz','$pens','$data');";
                                    $wyn=mysqli_query($pol, $zap);
                                    mysqli_close($pol);
                                }
                            }   
                        }
                    }
                }
            ?>
        </div>
    </section>

    

</body>
</html