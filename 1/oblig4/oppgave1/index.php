<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig4.css">
    <link rel="stylesheet" href="oppgave1.css">
    <title>Oppgave 1</title>
</head>
<body>
    <div class="header">
        <h1>Oppgave 1</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
        <div  id="content">
            <h2>oppgave 1</h2>
                <ol class= "abc">
                <form method="POST" action="index.php" class="Form">
                Name: <br><input type="text" name="name"> <br>  
                <input type="submit" value="submit">
            </form>
                <?php
                        if(isset($_POST["name"])) {
                            for($i = 0; $i < 5; $i++) {
                                echo $_POST["name"] . "-";
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