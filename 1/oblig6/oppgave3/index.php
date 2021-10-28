<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig6.css">
    <link rel="stylesheet" href="oppgave3.css">
    <title>Oppgave 3</title>
</head>
<body>
    <div class="header">
        <h1>Oppgave 3</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
    <div  id="content">
        <h2>oppgave 3</h2>
        <ol class= "abc">
            <form method="POST" action="index.php" class="Form">
                 Forfatter <input type="text" name="Forfatter" > <br>
               <br> Sitat <input type="text" name="Sitater" > <br>
                <br> <input type="submit" name="submit" > <br> <br> <br>
            </form>
            <?php
                if (isset($_POST["Sitater"])){
                    $myfile = fopen("ord3.txt", "a") or die("Unable to open file!");
                    fwrite($myfile, $_POST["Forfatter"]);
                    fwrite($myfile, "\n");
                    fwrite($myfile, $_POST["Sitater"]);
                    fwrite($myfile, "\n");
                    fclose($myfile);
                }
                $myfile = fopen("ord3.txt", "r") or die("Unable to open file!");
                    while (!feof($myfile)){
                        echo fgets($myfile) . "<br>";
                    }
                    fclose($myfile);
            ?>
        </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>+