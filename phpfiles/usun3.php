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
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <?php
                include('polaczenie.php');
                polacz();
                $numprac2=$_POST['numprac2'];
                $imie=$_POST['imie2'];
                $nazw=$_POST['nazw2'];
                if(isset($_POST['tak']))
                { 
                    $zap3="DELETE FROM `pracownicy` WHERE `pracownicy`.`id`=$numprac2;";
                    $wyn3=mysqli_query($pol, $zap3);
                    if($wyn3) echo"<h2>Pracownik $imie i $nazw został usunięty</h2>";
                    else echo"<h2>Nie udało się usunąć pracownika</h2>";
                }
                if(isset($_POST['nie']))
                {
                    echo"<h2>Zrezygnowałeś z usunięcia pracownika $imie i $nazw</h2>";
                }
            ?>
        </div>
    </section>

</body>
</html>