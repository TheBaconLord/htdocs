<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig5.css">
    <link rel="stylesheet" href="oppgave5.css">
    <title>Oppgave 5</title>
</head>
<body>
    <div class="header">
        <h1>Oppgave 5</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
    <div  id="content">
        <h2>oppgave 5</h2>
            <ol class= "abc">
            <?php
                    function navn($navn, $etternavn, $adresse, $tlf){
                        echo "$navn har opphavsrett til materialet på denne nettsiden";
                    }
                    navn("bob");
                ?>
            </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>