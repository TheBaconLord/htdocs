<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig4.css">
    <link rel="stylesheet" href="oppgave6.css">
    <title>Oppgave 6</title>
</head>
<body>
    <div class="header">
        <h1>Pizzaria</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
        <div  id="content">
            <h2></h2>
                <ol class= "abc">  
                    <form method="POST" action="pizzaria.php" class="Form">
                    Navn: <br><input type="text" name="name"> <br>  
                    Leverings adresse: <br><input type="text" name="adresse"> <br>
                    <input type="radio" name="levering"> 
                    <label for="levering">hentes</label><br>
                    <input type="radio" name="levering"> 
                    <label for="levering">Sendt hjem på døra</label><br>
                    <label for="printAntall">alternativer;</label>
                        <select name="printAntall" id="printAntall">
                            <option value="1">Peperoni pizza</option>
                            <option value="1">Hawaien pizza</option>
                            <option value="1">Malibu pizza</option>
                        </select> <br>
                    <input type="radio" name="ekstra"> 
                    <label for="ekstra">ekstra ost</label><br>
                    <input type="radio" name="ikke_ekstra"> 
                    <label for="ikke_ekstra">Ikke ekstra ost</label><br>
                    <input type="submit" value="submit">
                    </form>
                </ol>
                

    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>