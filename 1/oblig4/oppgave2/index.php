<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig4.css">
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
                <form method="POST" action="index.php" class="Form">
                    Name: <br><input type="text" name="name"> <br>  
                    <input type="radio" name="printAntall" value="1">
                    <label>1</label><br>
                    <input type="radio" name="printAntall" value="5">
                    <label>5</label><br>
                    <input type="radio" name="printAntall" value="10">
                    <label>10</label><br>
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