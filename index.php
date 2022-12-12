<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1 class="logo">Aplikacja od edytowanie pracowników</h1>

    <div class="nav">
        <div class="containter"> 
            <form action="" method="post">
                <label for="wybor">Wybierz opcję:</label><br>
                <select name="wybor">
                    <option value="0">Dodaj pracownika</option>
                    <option value="1">Wyświetl pracowników</option>
                    <option value="2">Edytuj pracownika</option>
                    <option value="3">Usuń pracownika</option>
                    <option value="4">Operacje na tabeli</option>
                </select><br>
                <input type="submit" class="przycisk" value="Prześlij" name="p">
                <?php
                if(isset($_POST['p'])) 
                {
                    $wybor=$_POST['wybor'];
                    if($wybor=='0') header("Location:phpfiles/dodaj.php");
                    if($wybor=='1') header("Location:phpfiles/wyswietl.php");
                    if($wybor=='2') header("Location:phpfiles/edytuj.php");
                    if($wybor=='3') header("Location:phpfiles/usun.php");
                    if($wybor=='4') header("Location:phpfiles/operacje.php");
                }
                ?>
            </form>
        </div>
    </div>

    <section class="hero">
        <div class="container">

        </div>
    </section>

</body>
</html>