<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="../oblig6.css">
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
        <?php
            if (isset($_POST["Poeng"])){
                $file = fopen("ord4.txt", "a") or die("Unable to open file!");
                fwrite($file, $_POST["Navn"]);
                fwrite($file, ";");
                fwrite($file, $_POST["Poeng"]);
                fwrite($file, "\n");
                fclose($file);
            }
        ?>

        <h2>oppgave 4</h2>    
        <ol class= "abc">
            <form method="POST" action="index.php" class="Form">
                 Navn <input type="text" name="Navn" required> <br>
                <br> Poeng <input type="number" min="0" max="100" name="Poeng" required> <br>
                <br> <input type="submit" name="submit" > <br> <br> <br>
            </form>
            <table>
            
                <tr>
                    <td>Navn</td>
                    <td>Poeng</td>
                </tr>
            <tbody>
                <?php
                if(filesize("ord4.txt") > 0) {
                    $file = fopen("ord4.txt", "r") or die("Unable to open file!");
                    $scoreLowest = 100;
                    $scoreHighest = 0;
                    $scoreTotal = 0;
                    $scoreAmount = 0;

                    while(!feof($file)){
                        $data = explode(";",fgets($file));

                        if(isset($data[1])){
                            if($data[1] > $scoreHighest) $scoreHighest = $data[1];
                            if($data[1] < $scoreLowest) $scoreLowest = $data[1];
                            $scoreTotal += $data[1];
                            $scoreAmount ++;

                            echo "<tr>";
                            echo "<td>". trim($data[0]). "</td>";
                            echo "<td>". trim($data[1]). "</td>";
                            echo "</tr>";
                        }
                    }
                
                    echo"<tr>";
                    echo"<td> Gjennomsnitt </td>";
                    echo"<td>" .round($scoreTotal/$scoreAmount, 2)."</td>";
                    echo"</tr>";

                    echo"<tr>";
                    echo"<td> Høyeste </td>";
                    echo"<td>" . $scoreHighest ."</td>";
                    echo"</tr>";

                    echo"<tr>";
                    echo"<td> Laveste </td>";
                    echo"<td>" . $scoreLowest."</td>";
                    echo"</tr>";
                } else {
                    echo"<tr>";
                    echo"<td>Ingen resultat lagt inn</td>";
                    echo"<td>Ingen resultat lagt inn</td>";
                    echo"</tr>";
                }
                ?>
            </tbody>    
            </table>
        </ol>
    </div>
    <div class="footer">
        <p id="sebastianhauglid">Sebastian Hauglid</p>
    </div>
</body>
</html> 