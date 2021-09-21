<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig3.css">
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
                    <p>Fordelen med å brukenavn istede for nummere er at det blir enklere og forstå.</p> 
                </li>
                <li>
                    <?php
                        $elev1 = array("Fornavn" => "Hans", "Etternavn" => "Husby", "Klasse" => "3DAA", "Tid" => "25", "Alder" => "17", "Karakter" => "4");
                        $elev2 = array("Fornavn" => "Joakim", "Etternavn" => "Hasad", "Klasse" => "3DAA", "Tid" => "23", "Alder" => "17", "Karakter" => "+4");
                        $elev3 = array("Fornavn" => "Hana", "Etternavn" => "Fulheim", "Klasse" => "3DAA", "Tid" => "30", "Alder" => "17", "Karakter" => "5");
                        $elev4 = array("Fornavn" => "Tom", "Etternavn" => "Grom", "Klasse" => "3DAA", "Tid" => "29", "Alder" => "17", "Karakter" => "+5");
                        $elev5 = array("Fornavn" => "Oskar", "Etternavn" => "Hjemen", "Klasse" => "3DAA", "Tid" => "15", "Alder" => "17", "Karakter" => "3");
                        $elev6 = array("Fornavn" => "Gro", "Etternavn" => "Hansen", "Klasse" => "3DAA", "Tid" => "32", "Alder" => "17", "Karakter" => "-4");

                        $elev1['Fornavn'] = "Hans";
                        $elev1['Etternavn'] = "Husby";
                        $elev1['Klasse'] = "3DAA";
                        $elev1['Tid'] = "25";
                        $elev1['Alder'] = "17";
                        $elev1['Karakter'] = "4";

                        $elev2['Fornavn'] = "Joakim";
                        $elev2['Etternavn'] = "Hasad";
                        $elev2['Klasse'] = "3DAA";
                        $elev2['Tid'] = "23";
                        $elev2['Alder'] = "17";
                        $elev2['Karakter'] = "+4";

                        $elev3['Fornavn'] = "Hana";
                        $elev3['Etternavn'] = "Fulheim";
                        $elev3['Klasse'] = "3DAA";
                        $elev3['Tid'] = "30";
                        $elev3['Alder'] = "17";
                        $elev3['Karakter'] = "5";

                        $elev4['Fornavn'] = "Tom";
                        $elev4['Etternavn'] = "Grom";
                        $elev4['Klasse'] = "3DAA";
                        $elev4['Tid'] = "29";
                        $elev4['Alder'] = "17";
                        $elev4['Karakter'] = "+5";

                        $elev5['Fornavn'] = "Oskar";
                        $elev5['Etternavn'] = "Hjemen";
                        $elev5['Klasse'] = "3DAA";
                        $elev5['Tid'] = "15";
                        $elev5['Alder'] = "17";
                        $elev5['Karakter'] = "3";

                        $elev6['Fornavn'] = "Gro";
                        $elev6['Etternavn'] = "Hansen";
                        $elev6['Klasse'] = "3DAA";
                        $elev6['Tid'] = "32";
                        $elev6['Alder'] = "17";
                        $elev6['Karakter'] = "-4";

                        echo "Elev 1";
                        echo "<br>" .$elev1['Fornavn'];
                        echo         $elev1['Etternavn'];
                        echo "<br>" .$elev1['Alder'];
                        echo "<br>" .$elev1['Klasse'];
                        echo "<br>Tid: " .$elev1['Tid'];
                        echo "<br>Karakter: " .$elev1['Karakter'];

                        echo "<br>Elev 2";
                        echo "<br>" .$elev2['Fornavn'];
                        echo         $elev2['Etternavn'];
                        echo "<br>Alder:" .$elev2['Alder'];
                        echo "<br>" .$elev2['Klasse'];
                        echo "<br>Tid: " .$elev2['Tid'];
                        echo "<br>Karakter: " .$elev2['Karakter'];

                        echo "<br>Elev 3";
                        echo "<br>" .$elev3['Fornavn'];
                        echo         $elev3['Etternavn'];
                        echo "<br>Alder:" .$elev3['Alder'];
                        echo "<br>" .$elev3['Klasse'];
                        echo "<br>Tid: " .$elev3['Tid'];
                        echo "<br>Karakter: " .$elev3['Karakter'];
                       
                        echo "<br>Elev 4";
                        echo "<br>" .$elev4['Fornavn'];
                        echo         $elev4['Etternavn'];
                        echo "<br>Alder:" .$elev4['Alder'];
                        echo "<br>" .$elev4['Klasse'];
                        echo "<br>Tid: " .$elev4['Tid'];
                        echo "<br>Karakter: " .$elev4['Karakter'];
                       
                        echo "<br>Elev 5";
                        echo "<br>" .$elev5['Fornavn'];
                        echo         $elev5['Etternavn'];
                        echo "<br>Alder:" .$elev5['Alder'];
                        echo "<br>" .$elev5['Klasse'];
                        echo "<br>Tid: " .$elev5['Tid'];
                        echo "<br>Karakter: " .$elev5['Karakter'];

                        echo "<br>Elev 6";
                        echo "<br>" .$elev6['Fornavn'];
                        echo         $elev6['Etternavn'];
                        echo "<br>Alder:" .$elev6['Alder'];
                        echo "<br>" .$elev6['Klasse'];
                        echo "<br>Tid: " .$elev6['Tid'];
                        echo "<br>Karakter: " .$elev6['Karakter'];
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