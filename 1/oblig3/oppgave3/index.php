<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig3.css">
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
        <table>
            <tr>
                <td> $x ulik $y </td>
                <td> $x != $y </td>
            </tr>
            <tr>
                <td>$x lik $y</td>
                <td>$x == $y</td>
            </tr>
            <tr>
                <td>$x lik $y ELLER $y ulik $x</td>
                <td>($x == $y) || ($y != $x)</td>
            </tr>
            <tr>
                <td>$x lik $y og $y lik $z, ELLER $z større enn eller lik $x</td>
                <td>(($x == $y) && ($y == $z)) || ($z >= $x)</td>
            </tr>
            <tr>
                <td>$x er større enn $y lik $z OG $y er større enn $z</td>
                <td>($x > ($y == $z)) && ($y > $z)</td>
            </tr>
            <tr>
                <td>$x er lik $y OG $y er lik $z</td>
                <td>($x == $y) && ($y == $z)</td>
            </tr>
        </table>
    </div>  
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>