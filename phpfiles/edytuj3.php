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
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <?php
                if(isset($_POST['zapisz']))
                {
                    include('polaczenie.php');
                    polacz();
                    if(polacz())
                    {
                        $numprac2=$_POST['ukryte'];
                        $imie2=$_POST['imie2'];
                        $nazw2=$_POST['nazw2'];
                        $wiek2=$_POST['wiek2'];
                        $staz2=$_POST['staz2'];
                        $stan2=$_POST['stan2'];
                        $wydz2=$_POST['wydz2'];
                        $pens2=$_POST['pens2'];
                        if(empty($imie2) || empty($nazw2)) echo"Podaj imię i nazwisko";
                        else
                        {   
                            $zap2="UPDATE pracownicy SET imie='$imie2', nazwisko='$nazw2', wiek='$wiek2', staz='$staz2', stanowisko='$stan2', wydzial='$wydz2', pensja='$pens2' WHERE id='$numprac2';";
                            $wyn2=mysqli_query($pol, $zap2);
                            if($wyn2) echo"<h2>Pomyślnie zmieniono dane</h2>";
                            else echo"<h2>Nie udało się zmienić danych</h2>";
                        }
                    }
                }
               
            ?>
        </div>
    </section>

</body>
</html>