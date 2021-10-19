<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/1/main.css">
    <title>Prøve oppgave 7</title>
</head>
<body>
    <div class="header">
        <h1>Prøve Opggave 7 b</h1>
    </div>
    <div class="topnav">

    </div>
    <div  id="content">
        <h2>oppgave 7 b</h2>
            <ol class= "abc">
             <!--Jeg skal lage fire mate metoder for å adere, subtrahere, dividere og mulitplisere, for dette ma jeg kunne hente ut inputene som blir endt in i formsen input.php.-->
                <li>
                    <?php
                    $Pluss = $_POST["Plus"];
                    $Minus = $_POST["minus"];
                    $Gange = $_POST["gange"];
                    $Deling = $_POST["deling"];
                   //Her skal jeg lage funksjonen for adere.
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        if ($_POST["Gange"] == "")
                    }
                    $Pluss = $_POST[]
                        function plus($Tall_1, $Tall_2){
                            return ($tall_1 + $tall_2);
                        }
                        echo plus("Tall_1","Tall_2");
                    // Her skal jeg lage funksjonen for å subtrahere.
                    $Minus = $_POST[]
                        function minus($tall_1, $tall_2){
                            return ($tall_1 - $tall_2);
                        }
                        echo minus("Tall_1","Tall_2");
                    // Her skla jeg laeg funksojnen for å Mulitplisere.
                    $Gange = $_POST[]
                        function gange($tall_1, $tall_2){
                            return ($tall_1 * $tall_2);
                        }
                        echo gange("Tall_1","Tall_2");
                    //Her skla jeg lage funksjonen for å dividere.
                    $Deling = $_POST[]
                        function deling($tall_1, $tall_2){
                            return ($tall_1 / $tall_2);
                        }
                        echo deling("Tall_1","Tall_2");
                    ?>
                </li>
                <li>
                    
                </li>
            </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html>