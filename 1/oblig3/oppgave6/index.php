<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig3.css">
    <link rel="stylesheet" href="oppgave6.css">
    <title>Oppgave 6</title>
</head>
<body>
    <div class="header">
        <h1>Oppgave 6</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
    <div  id="content">
        <h2>oppgave 6</h2>
            <ol class= "abc">
                <li>
                    <?php
                        $random = array();
                        for ($x = 0; $x < 100; $x++){
                            $random[$x] = rand(0, 1000);
                            #echo $random[$x];
                        } 
                    ?>
                </li>
                <li>
                    <?php
                        $random = array();
                            for ($x = 0; $x < 100; $x++){
                            $random[$x] = rand(0, 1000);
                            #echo $random[$x];
                        } 
                        $høyeste = 0;
                        foreach ($random as $index => $value){
                            if($value > $høyeste){
                                $høyeste = $value;
                            }
                        }
                        echo "høyeste verdi er : $høyeste";
                    ?>  
                </li>
                <li>
                    <?php
                        $random = array();
                            for ($x = 0; $x < 100; $x++){
                            $random[$x] = rand(0, 1000);
                            #echo $random[$x];
                        } 
                        $Laveste = 1000;
                        foreach ($random as $index => $value){
                            if($value < $Laveste){
                                $Laveste = $value;
                            }
                        }
                        echo "laveste verdi er : $Laveste";
                    ?> 
                </li>
                <li>
                    <?php
                        $random = array();
                        for ($x = 0; $x < 100; $x++){
                            $random[$x] = rand(0, 1000);
                            #echo $random[$x];
                        }
                        $teller = 0;
                        foreach ($random as $index => $value){
                            if ($value < 499) {
                                $teller ++;
                            }
                        }
                        echo "er en verdi mellom 0-499 verdi er : $teller";
                    ?> 
                </li>
            </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>