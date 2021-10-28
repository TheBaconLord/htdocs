<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig6.css">
    <link rel="stylesheet" href="oppgave2.css">
    <title>Oppgave 2</title>
</head>
<body>
    <div class="header">
        <h1>Oppgave 2</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
    <div  id="content">
        <h2>oppgave 2</h2>
            <ol class= "abc">
                <li>
                <?php
                    $myfile = fopen("../oppgave1/ord1.txt", "r") or die("Unable to open file!");
                    $liste = array();
                    
                    $teller = 0;
                    while (!feof($myfile)){
                        $liste[$teller] = fgets($myfile);
                        $teller++;
                    }
                    fclose($myfile);
                    
                    echo $liste[rand(0, count($liste)-2)];

                    //printe ut valgt arraybox

                ?>
                </li>
            </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>