<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
  <title>Busy prosjekt</title>
  <?php 
      $Tlf = $_POST["tlf"];
      $Adresse = $_POST["adresse"];
      $Firma_id = $_POST["firmanavn"];
      $Postnummer = $_POST["postnummer"];
      $Organisjonsnummer = $_POST["orgnummer"];
      $Leverandør = $_POST["leverandor"];
    ?>
</head>
<body>
  <div class="header">
    <h1>Firmakontakter</h1>
  </div>
  <div class="topnav">
  <a href="./personkontakter.php">Personkontakter</a>
  <a href="./">Forside</a>
  </div>
  <div>
    <?php 
      $conection = new mysqli("localhost","my_user","my_password","my_db"); 
      if ($conection -> connect_errno) {
        echo "Failed to connect to MySQL:" . $conection -> connect_error;
        exit();
      }

      $conection -> query("INSERT INTO firma (navn, orgnummer, adresse, postnummer, leverandor) VALUES ('" . $Firma_id . "', '". $Organisjonsnummer . "', '" . $Adresse . "', '" . $Postnummer . "', '" . $Leverandør . "')")
    ?>
  </div>
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>

</body>
</html>