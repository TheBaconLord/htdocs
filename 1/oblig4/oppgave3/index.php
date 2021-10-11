<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig4.css">
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
                    Name: <br><input type="text" name="name"> <br>  
                    <label for="printAntall">velg antall;</label>
                    <select name="printAntall" id="printAntall">
                        <option value="1">1</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                    </select> <br>
                    <input type="submit" value="submit">
                </form>
                    <?php
                        if(isset($_POST["printAntall"])) {
                            $antall = $_POST["printAntall"];
                            $name = $_POST["name"];
                            for($i = 0; $i < $antall; $i++) {
                                echo ($name . "-");
                            }
                        }
                    ?><br>   
                </ol>
                

    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>