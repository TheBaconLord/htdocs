<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig4.css">
    <link rel="stylesheet" href="oppgave4.css">
    <title>Oppgave 4</title>
</head>
<body>
    <div class="header">
        <h1>Oppgave 4</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
    <div  id="content">
        <h2>oppgave 4</h2>
            <ol class= "abc">
                <li>
                    <?php
                            $tabell = array(1, 3, 15, 23, 31, 39, 46, 57, 85, 93);
                            print_r($tabell);
                     ?>
                </li><br>
                <li>
                    <?php
                            $tabell = array(1, 3, 15, 23, 31, 39, 46, 57, 85, 93);
                            
                            shuffle($tabell);
                            print_r($tabell);
                     ?>
                </li><br>
                <li>
                    <?php
                            $tabell = array(1, 3, 15, 23, 31, 39, 46, 57, 85, 93);
                            asort($tabell);
                            print_r($tabell);
                     ?>
                </li><br>
                <li>
                    <?php
                            $tabell = array(1, 3, 15, 23, 31, 39, 46, 57, 85, 93);
                            $newArray = array_reverse($tabell);
                            print_r($newArray);
                     ?>
                </li>
            </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>