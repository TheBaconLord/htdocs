<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig4.css">
    <link rel="stylesheet" href="oppgave5.css">
    <title>Oppgave 5</title>
</head>
<body>
    <div class="header">
        <h1>Oppgave 5</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
    <div  id="content">
        <h2>oppgave 5</h2>
            <ol class= "abc">
                <li>
                    <ul>
                        <?php
                            $DATA = array("Sander", "Linus", "Sebastian", "Thomas", "Marius", "Tobias", "Erling", "Luan", "Jovan", "Szymon", "Oscar", "Steinar", "Fredrik");
                            foreach ($DATA as $index => $value){
                                echo "<li>$value</li>";
                            }
                        ?>
                    </ul>
                </li><br>
                <li>
                    <ul>
                        <?php
                            $DATA = array("Sander", "Linus", "Sebastian", "Thomas", "Marius", "Tobias", "Erling", "Luan", "Jovan", "Szymon", "Oscar", "Steinar", "Fredrik");
                            $index= 0;
                            while($index < count($DATA)){ 
                                echo "<li>$DATA[$index]</li>";
                            $index++ ;
                            }
                        ?>  
                    </ul>
                </li><br>
                <li>
                    <ul>
                        <?php
                            $DATA = array("Sander", "Linus", "Sebastian", "Thomas", "Marius", "Tobias", "Erling", "Luan", "Jovan", "Szymon", "Oscar", "Steinar", "Fredrik");
                            for($index=0; $index < count($DATA); $index++) {
                                echo "<li>$DATA[$index]</li>";
                            }
                        ?>  
                    </ul>
                </li><br>
            </ol>
                

    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>