<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <h1 class="logo">Aplikacja od edytowanie pracowników</h1>
    

    <div class="nav-form">
        <div class="containter"> 
            <h2 class="wybrany">Wybrałeś opcje wyświetlania pracowników</h2>
            <a href="../index.php" class="powrot">Powrót do strony głównej</a>
            <form action="" method="post">
                <h3>Wyświetl według:</h3>
                <select class="opcje" name="wybor">
                    <option value="0">Numer</option>
                    <option value="1">Alfabetycznie</option>
                    <option value="2">Wiek</option>
                    <option value="3">Staż</option>
                    <option value="4">Od najświeższych</option>
                </select><br>
                <h3>Podaj wydział:</h3>
                <input type="radio" name="wydz" value="%" checked>Dowolny
                <input type="radio" name="wydz" value="magazyn">Magazyn
                <input type="radio" name="wydz" value="logistyczny">Logistyczny
                <input type="radio" name="wydz" value="informatyczny" >Informatyczny
                <input type="radio" name="wydz" value="zarzad">Zarząd<br>
                <input type="radio" name="wydz" value="sprzatania">Sprzątania
                <input type="radio" name="wydz" value="kuchnia">Kuchnia<br>
                <label for="pensja_wyz">Podaj pensje:</label>
                <input type="number" name="pensja_wyz">
                <input type="checkbox" class="pensja" name="pensja"> Pokaż pensje<br>
                <input type="submit" value="Filtruj" name="p" class="przycisk"><br>
                <input type="submit" value="Wszyscy pracownicy" name="p2" class="przycisk_wys">
            </form>
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <?php
                error_reporting(0);
                if(isset($_POST['p']))
                {
                    include('polaczenie.php');
                    polacz();
                    $wybor=$_POST['wybor'];
                    $pensja_opc=$_POST['pensja'];
                    $wydzial_radio=$_POST['wydz'];
                    $pensja_wyz=$_POST['pensja_wyz'];
                    if(empty($pensja_wyz)) $pensja_wyz=0;
                    if($pensja_opc)
                    {
                        if($wybor=="0")
                        {
                            $zap="SELECT * FROM pracownicy WHERE wydzial LIKE '$wydzial_radio' AND pensja>$pensja_wyz ORDER BY id desc;";
                        }
                        if($wybor=="1")
                        {
                            $zap="SELECT * FROM pracownicy WHERE wydzial LIKE '$wydzial_radio' AND pensja>$pensja_wyz ORDER BY imie desc;";
                        }
                        if($wybor=="2")
                        {
                            $zap="SELECT * FROM pracownicy WHERE wydzial LIKE '$wydzial_radio' AND pensja>$pensja_wyz ORDER BY wiek desc;";
                        }
                        if($wybor=="3")
                        {
                            $zap="SELECT * FROM pracownicy WHERE wydzial LIKE '$wydzial_radio' AND pensja>$pensja_wyz ORDER BY staz desc;";
                        }
                        if($wybor=="4")
                        {
                            $zap="SELECT * FROM pracownicy WHERE wydzial LIKE '$wydzial_radio' AND pensja>$pensja_wyz ORDER BY data_dodania asc;";
                        }
                        $wyn=mysqli_query($pol,$zap);
                        echo"<table><tr><th>Numer</th><th>Imie</th><th>Nazwisko</th><th>Wiek</th><th>Staż</th><th>Stanowisko</th><th>Wydzial</th><th>Pensja</th><th>Data dodania</th></tr>";
                        while($wiersz=mysqli_fetch_assoc($wyn))
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
                    }
                    else
                    {
                        if($wybor=="0")
                        {
                            $zap="SELECT * FROM pracownicy WHERE wydzial LIKE '$wydzial_radio' AND pensja>$pensja_wyz ORDER BY id desc;";
                        }
                        if($wybor=="1")
                        {
                            $zap="SELECT * FROM pracownicy WHERE wydzial LIKE '$wydzial_radio' AND pensja>$pensja_wyz ORDER BY imie desc;";
                        }
                        if($wybor=="2")
                        {
                            $zap="SELECT * FROM pracownicy WHERE wydzial LIKE '$wydzial_radio' AND pensja>$pensja_wyz ORDER BY wiek desc;";
                        }
                        if($wybor=="3")
                        {
                            $zap="SELECT * FROM pracownicy WHERE wydzial LIKE '$wydzial_radio' AND pensja>$pensja_wyz ORDER BY staz desc;";
                        }
                        if($wybor=="4")
                        {
                            $zap="SELECT * FROM pracownicy WHERE wydzial LIKE '$wydzial_radio' AND pensja>$pensja_wyz ORDER BY data_dodania asc;";
                        }
                        $wyn=mysqli_query($pol,$zap);
                        echo"<table><tr><th>Numer</th><th>Imie</th><th>Nazwisko</th><th>Wiek</th><th>Staż</th><th>Stanowisko</th><th>Wydzial</th><th>Pensja</th><th>Data dodania</th></tr>";
                        while($wiersz=mysqli_fetch_assoc($wyn)){
                            $id=$wiersz['id'];
                            $imie=$wiersz['imie'];
                            $nazw=$wiersz['nazwisko'];
                            $wiek=$wiersz['wiek'];
                            $staz=$wiersz['staz'];
                            $stan=$wiersz['stanowisko'];
                            $wydz=$wiersz['wydzial'];
                            $pens=$wiersz['pensja'];
                            $data=$wiersz['data_dodania'];
                            echo"<tr><td>$id</td><td>$imie</td><td>$nazw</td><td>$wiek</td><td>$staz</td><td>$stan</td><td>$wydz</td><td>******</td><td>$data</td></tr>";
                        }
                        echo"</table>";
                    }
                }
                if(isset($_POST['p2']))
                        {
                            include('polaczenie.php');
                            polacz();
                            $zap2="SELECT AVG(pensja), AVG(wiek), AVG(staz) FROM pracownicy;";
                            $wyn2=mysqli_query($pol,$zap2);
                            while($wiersz2=mysqli_fetch_array($wyn2))
                            {
                                $srednia_pensja=$wiersz2['AVG(pensja)'];
                                $sredni_wiek=$wiersz2['AVG(wiek)'];
                                $sredni_staz=$wiersz2['AVG(staz)'];
                                echo"<h2>Średnia pensja: ".round($srednia_pensja,2)."</h2>";
                                echo"<h2>Średni wiek: ".round($sredni_wiek,2)."</h2>";
                                echo"<h2>Średni staż: ".round($sredni_staz,2)."</h2>";
                            }

                            $zap3="SELECT * FROM pracownicy WHERE Pensja=(SELECT MAX(pensja) FROM pracownicy);";
                            $wyn3=mysqli_query($pol,$zap3);
                            echo"<h2>Pracownik z najwyższą pensją: </h2>";
                            echo"<table><tr><th>ID</th><th>Imie</th><th>Nazwisko</th><th>Wiek</th><th>Staż</th><th>Stanowisko</th><th>Wydzial</th><th>Pensja</th><th>Data dodania</th></tr>";
                            while($wiersz=mysqli_fetch_array($wyn3))
                            {
                                $id=$wiersz['id'];
                                $imie=$wiersz['imie'];
                                $nazw=$wiersz['nazwisko'];
                                $wiek=$wiersz['wiek'];
                                $staz=$wiersz['staz'];
                                $stan=$wiersz['stanowisko'];
                                $wyd=$wiersz['wydzial'];
                                $pen=$wiersz['pensja'];
                                $data=$wiersz['data_dodania'];
                                echo"<tr><td>$id</td><td>$imie</td><td>$nazw</td><td>$wiek</td><td>$staz</td><td>$stan</td><td>$wyd</td><td>$pen</td><td>$data</td></tr>";
                            }
                            echo"</table>";
                        }
            ?>
        </div>
    </section>

</body>
</html>