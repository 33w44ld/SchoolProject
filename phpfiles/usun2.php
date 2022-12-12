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
            <h2 class="wybrany">Wybrałeś opcje usuwania pracowników</h2>
            <a href="../index.php" class="powrot">Powrót do strony głównej</a>
            <form action='usun2.php' method="post">
                <label for="numerid" class="podnum">Podaj ID pracownika do usunięcia:</label>
                <input type="number" name="numid" id="numid" >
                <input type="submit" value="Usuń pracownika" name="p" class="przycisk_edycja">
            </form>
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <?php
                if(isset($_POST['p']))
                {
                    $numprac=$_POST['numid'];
                    include('polaczenie.php');
                    polacz();
                    $sprawdz="SELECT id FROM pracownicy WHERE id='$numprac';";
                    $wyn=mysqli_query($pol,$sprawdz);
                    if(mysqli_num_rows($wyn)==0) echo"<h2>Nie istnieje pracownik z ID $numprac</h2>";
                    else
                    {
                        echo"<table><tr><th>id
                        </th><th>Imie</th><th>Nazwisko</th><th>Wiek</th><th>Staż</th><th>Stanowisko</th><th>Wydzial</th><th>Pensja</th><th>Data dodania</th></tr>";
                        $zap2="SELECT * FROM pracownicy WHERE id='$numprac';";
                        $wyn2=mysqli_query($pol,$zap2);
                        while($wiersz=mysqli_fetch_assoc($wyn2))
                        {
                            $id=$wiersz['id'];
                            $imie=$wiersz['imie'];
                            $nazw=$wiersz['nazwisko'];
                            $wiek=$wiersz['wiek'];
                            $staz=$wiersz['staz'];
                            $stan=$wiersz['stanowisko'];
                            $wydz=$wiersz['wydzial'];
                            $pens=$wiersz['pensja'];
                            $data=$wiersz['data_dodania'];
                            echo"<tr><td>$id</td><td>$imie</td><td>$nazw</td><td>$wiek</td><td>$staz</td><td>$stan</td><td>$wydz</td><td>$pens</td><td>$data</td></tr>";
                        }
                        echo"</table>";
                        echo"<h2>Czy napewno chcesz usunąć pracownika z ID $numprac</h2>";
                        echo"<form action='usun3.php' method='POST'>
                        <input type='submit' class='przycisk' name='tak' value='Tak'><br>
                        <input type='submit' class='przycisk' name='nie' value='Nie'>
                        <input type='hidden' name='numprac2' value='$numprac'>
                        <input type='hidden' name='imie2' value='$imie'>
                        <input type='hidden' name='nazw2' value='$nazw'>
                        </form>";

                    }
                }
            ?>
        </div>
    </section>

</body>
</html>