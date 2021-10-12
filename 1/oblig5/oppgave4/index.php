<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig5.css">
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
                        function plus($tall_1, $tall_2){
                            return ($tall_1 + $tall_2);
                        }
                        echo plus(5,4);
                    ?>
                </li>
                <li>
                    <?php
                        function minus($tall_1, $tall_2){
                            return ($tall_1 - $tall_2);
                        }
                        echo minus(5,4);
                    ?>
                </li>
                <li>
                    <?php
                        function gange($tall_1, $tall_2){
                            return ($tall_1 * $tall_2);
                        }
                        echo gange(5,4);
                    ?>
                </li>
                <li>
                    <?php
                        function deling($tall_1, $tall_2){
                            return ($tall_1 / $tall_2);
                        }
                        echo deling(5,4);
                    ?>
                </li>
            </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>