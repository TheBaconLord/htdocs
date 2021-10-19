<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/1/main.css">
    <title>Prøve oppgave 6</title>
</head>
<body>
    <div class="header">
        <h1>Prøve Opggave 6</h1>
    </div>
    <div class="topnav">

    </div>
    <div  id="content">
        <h2>oppgave 6</h2>
            <ol class= "abc">
                <lu>
                    <?php
                    $Alfabet = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","Æ","Ø","Å");
                       
                    foreach($Alfabet as $index => $value) {
                        echo $value;
                    }
                    ?>
                </lu>
            </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>
