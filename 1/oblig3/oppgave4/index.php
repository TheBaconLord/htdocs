<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig3.css">
    <link rel="stylesheet" href="oppgave4.css">
    <title>Oppgave 4</title>
</head>
<body>
    <div class="header">
        <h1>Oppgave 4</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
    <div  id="content">
        <ol class= "abc">
            <li class ="A">
            <li class ="B">
                <?php
                    $numbers = array(1,2,4,6,8,10,13,15,20,21,25,28,30,32,36,37,38,40,45,48,);

                    foreach ($numbers as $index => $value){
                        echo "$value " ;
                    }
                ?> 
            </li>
            </li>
            <li class ="C">
                <?php
                    $numbers = array(1,2,4,6,8,10,13,15,20,21,25,28,30,32,36,37,38,40,45,48,);

                    foreach ($numbers as $index => $value){
                        if ($value <= 25)
                        echo "$value ";
                    }
                ?>
            </li>
            <li class ="D">
                <?php
                    $numbers = array(1,2,4,6,8,10,13,15,20,21,25,28,30,32,36,37,38,40,45,48,);

                    foreach ($numbers as $index => $value){
                        if ($value >= 10 && $value <= 40 )
                        echo "$value ";
                    }
                ?>
            </li>
            <li class ="E">
                <?php
                    $numbers = array(1,2,4,6,8,10,13,15,20,21,25,28,30,32,36,37,38,40,45,48,);
                    $teller = 0;
                    foreach ($numbers as $index => $value){
                        if ($value > 10) {
                            $teller ++;
                        }
                    }
                    echo "$teller"
                ?>
            </li>
            <li class ="F">
                <?php
                    $numbers = array(1,2,4,6,8,10,13,15,20,21,25,28,30,32,36,37,38,40,45,48,);
                    echo array_sum($numbers);
                ?>
            </li>
            <li class ="G">
                <?php
                    $numbers = array(1,2,4,6,8,10,13,15,20,21,25,28,30,32,36,37,38,40,45,48,);
                    $sum = 0;
                    $gjennomsnitt = 0;
                    foreach ($numbers as $index => $value){
                    $sum += $value;
                    }
                    $gjennomsnitt = $sum / count($numbers);
                    echo $gjennomsnitt;
                ?>
            </li>
            <li class ="H">
                <?php
                    $numbers = array(1,2,4,6,8,10,13,15,20,21,25,28,30,32,36,37,38,40,45,48,);

                    foreach ($numbers as $index => $value){
                        if ($value % 2 == 0 )
                        echo "$value ";
                    }
                ?>
            </li>
            <li class ="I">
                <?php
                    $numbers = array(1,2,4,6,8,10,13,15,20,21,25,28,30,32,36,37,38,40,45,48,);

                    foreach ($numbers as $index => $value){
                        if ($value % 2 != 0 )
                        echo "$value ";
                    }
                ?>
            </li>
        </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>