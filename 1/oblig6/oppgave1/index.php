<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig6.css">
    <link rel="stylesheet" href="oppgave1.css">
    <title>Oppgave 1</title>
</head>
<body>
    <div class="header">
        <h1>Oppgave 1</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
    <div  id="content">
        <h2>oppgave 1</h2>
            <ol class= "abc">
                <li>
                <?php
                    $myfile = fopen("ord.txt", "r") or die("Unable to open file!");
                    while (!feof($myfile)){
                        echo fgets($myfile) . "<br>";
                    }
                    fclose($myfile);
                ?>
                </li>
            </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>