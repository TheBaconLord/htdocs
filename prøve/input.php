<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/1/main.css">
    <title>Prøve oppgave 7</title>
</head>
<body>
    <div class="header">
        <h1>Prøve Opggave 7 a</h1>
    </div>
    <div class="topnav">

    </div>
    <div  id="content">
        <h2>oppgave 7 a</h2>
            <ol class= "abc">
                <lu>
                    <!-- JEg skal leg en input hvor man kan skrive in hviklet tall og velge hviken regnetype man vil bruke-->
                    <form method="POST" action="resultat.php" class="Form">
                        Tall 1 <input type="text" name="Tall_1" required> <br>
                        Tall 2 <input type="text" name="Tall_2" required> <br>
                        regnings metoder <select name="Regning">
                            <option value="Plus">Adering</option>
                            <option value="minus">Subtrahering</option>
                            <option value="deling">Dividering</option>
                            <option value="gange">Multiplisering</option>
                        </select> <br>
                        <input type="submit" value="submit">
                    </form>
                </lu>
            </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>