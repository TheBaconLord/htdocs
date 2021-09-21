<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig3.css">
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
        <h4>$a = 3, $b = 5, $c = 8, $d = false</h4>
    
        <ol class= "abc">
            <li > False; ($a > $b) && ($a + $b == $c)</li>
            <li>  True; ($a > $b) || ($a + $b == $c)</li>
            <li>  True; !($a == $b)</li>
            <li>  False; !$d || false</li>
            <li>  True; ($a == 2 || $b == 5) && ($d !=($a < $b))</li>
            <li>  False; ($a > $b) && ((($a == 2 || $b == 5 ) && ($d != ( $a < $b))) != ($d && $d))</li>
            <li>  True; ($a < $b) || ((($a == 2 || $b == 5 ) && ($d != ( $a < $b))) != ($d && $d))</li>
        </ol>

    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>