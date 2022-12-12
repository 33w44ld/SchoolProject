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
                $numprac=$_POST['numid'];
                include('polaczenie.php');
                polacz();
                $sprawdz="SELECT id FROM pracownicy WHERE id='$numprac';";
                $wyn=mysqli_query($pol,$sprawdz);
                if(mysqli_num_rows($wyn)==0) echo"<h2>Nie istnieje pracownik z ID $numprac</h2>";
                else
                {
                    $zap="SELECT * FROM pracownicy WHERE id='$numprac';";
                    $wyn=mysqli_query($pol,$zap);
                        echo"<table><tr><th>Imie</th><th>Nazwisko</th><th>Wiek</th><th>Staż</th><th>Stanowisko</th><th>Wydzial</th><th>Pensja</th><th>Data dodania</th></tr>";
                        echo"<form action='edytuj3.php' method='POST'>";
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
                            echo"
                            <tr>
                                <td><input type='text' name='imie2' class='input-tabel' value='$imie'></td>
                                <td><input type='text' name='nazw2' class='input-tabel' value='$nazw'></td>
                                <td><input type='number' class='input-tabel' name='wiek2' value='$wiek'></td>
                                <td><input type='number' class='input-tabel' name='staz2' value='$staz'></td>
                                <td><input type='text' name='stan2' class='input-tabel' value='$stan'></td>
                                <td><input type='text' name='wydz2' class='input-tabel' value='$wydz'></td>
                                <td><input type='number' name='pens2' class='input-tabel' value='$pens'></td>
                                <td>$data</td>
                            </tr>";
                        }
                        echo"</table>";
                        echo"<input type='hidden' name='ukryte' value='$numprac'>
                        <input type='submit' class='przycisk' name='zapisz' value='Zapisz'></form>";
            
                }
               
            ?>
        </div>
    </section>

</body>
</html>