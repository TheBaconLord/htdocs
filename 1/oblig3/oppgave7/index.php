<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig3.css">
    <link rel="stylesheet" href="oppgave7.css">
    <title>Oppgave 7</title>
</head>
<body>
    <div class="header">
        <h1>Oppgave 7</h1>
    </div>
    <div class="topnav">
        <a href="../">Tilbake</a>
        <a href="../../">Til forside</a>
    </div>
    <div  id="content">
        <h2>oppgave 7</h2>
            <ol class= "abc">
                <li>
                    <?php
                        $Hobby = array(
                            "Golf" => array("Teknin", "Micro sport", "Nydelige spille steder"),
                            "Håndball" => array("Fysisk krevende", "Hurtig og intenst", "Ball kontroll"),
                            "Beatboxing" => array("Stemebånd", "musikk", "konsentarsjon"),
                            "Programering" => array("Lese feil meldinger", "Prøve om igjen", "Lage kode"),
                            "Gaming" => array("Konsentrasjon", "Åye hånd kordinasjon", "Strategisk tankegang"),
                            "Basketball" => array("Ball kontroll", "øye hånd kordinasjon", "Lag spill"),
                            "Drone flyving" => array("Spenndene", "teknisk krevende", "Avslappende"),
                            "Styrketrenning" => array("Tungt", "Bra for korppen", "Muskler"),
                            "Voleyball" => array("fysisk krvenede", "teknisk krevende", "reaksjons respons"),
                            "Løping" => array("Bra for musklene", "Både tungt og lett", "tids fordriv")
                        );
                    ?>
                </li>
                <li>
                    <?php
                        $Hobby = array(
                            "Golf" => array("Teknin", "Micro sport", "Nydelige spille steder"),
                            "Håndball" => array("Fysisk krevende", "Hurtig og intenst", "Ball kontroll"),
                            "Beatboxing" => array("Stemebånd", "musikk", "konsentarsjon"),
                            "Programering" => array("Lese feil meldinger", "Prøve om igjen", "Lage kode"),
                            "Gaming" => array("Konsentrasjon", "Åye hånd kordinasjon", "Strategisk tankegang"),
                            "Basketball" => array("Ball kontroll", "øye hånd kordinasjon", "Lag spill"),
                            "Drone flyving" => array("Spenndene", "teknisk krevende", "Avslappende"),
                            "Styrketrenning" => array("Tungt", "Bra for korppen", "Muskler"),
                            "Voleyball" => array("fysisk krvenede", "teknisk krevende", "reaksjons respons"),
                            "Løping" => array("Bra for musklene", "Både tungt og lett", "tids fordriv")
                        );
                        $size = 0;
                        foreach ($Hobby as $index => $value){
                           $size += count($value); 
                        }

                        echo $size
                    ?>
                </li>
                <li>
                    <?php
                        $Hobby = array(
                            "Golf" => array("Teknin", "Micro sport", "Nydelige spille steder"),
                            "Håndball" => array("Fysisk krevende", "Hurtig og intenst", "Ball kontroll"),
                            "Beatboxing" => array("Stemebånd", "musikk", "konsentarsjon"),
                            "Programering" => array("Lese feil meldinger", "Prøve om igjen", "Lage kode"),
                            "Gaming" => array("Konsentrasjon", "Åye hånd kordinasjon", "Strategisk tankegang"),
                            "Basketball" => array("Ball kontroll", "øye hånd kordinasjon", "Lag spill"),
                            "Drone flyving" => array("Spenndene", "teknisk krevende", "Avslappende"),
                            "Styrketrenning" => array("Tungt", "Bra for korppen", "Muskler"),
                            "Voleyball" => array("fysisk krvenede", "teknisk krevende", "reaksjons respons"),
                            "Løping" => array("Bra for musklene", "Både tungt og lett", "tids fordriv")
                        );
                        for($row = 0; $row <= 10; $row++){
                            echo "<p><b>Row number $row </b></p>";
                            echo "<ul>";
                            for ($col = 0; $col < 3; $col++){
                                echo "<li>".$Hobby[$row][$col]."</li>";
                            }
                            echo "</li>";
                        }
                    ?>
                </li>
            </ol>
    <div>
    
    </div>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>