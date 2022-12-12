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
            <h2 class="wybrany">Wybrałeś opcje wykonywania operacji na tabeli 'pracownicy'</h2>
            <a href="../index.php" class="powrot">Powrót do strony głównej</a>
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <form action="" method="post">
                <input type="submit" class="przycisk_edycja" value="Opróżnij tabelę" name="p"><hr>
                <label for="ai" style="font-size:1.2em;">Ustal wartość Auto_Increment</label>
                <input type="number" name="wai" ><input type="submit" class="przycisk" value="Zatwierdź" name="p2"><hr>
                <?php
                        include("polaczenie.php");
                        polacz();
                    if(isset($_POST['p']))
                    {
                        $zap="TRUNCATE TABLE pracownicy";
                        $wyn=mysqli_query($pol, $zap);
                    }
                    if(isset($_POST['p2']))
                    {
                        $wai=$_POST['wai'];
                        $zap="ALTER TABLE `pracownicy` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=$wai;";
                        mysqli_query($pol,$zap);
                    }
                    mysqli_close($pol);
                ?>
            </form>
        </div>
    </section>

</body>
</html>