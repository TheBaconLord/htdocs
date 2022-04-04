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
    ?>
</head>
<body>
  <div class="header">
    <h1>Firmakontakter</h1>
  </div>
  <div class="topnav">
    <a href="./firmakontakter.php">Firmakontakter</a>
    <a href="./personkontakter.php">Personkontakter</a>
    <a href="./personsøkmodul.php">Person søk</a>
    <a href="./">Forside</a>
  </div>
  <?php 
    $conection = new mysqli("localhost","root","","busy"); 
    if ($conection -> connect_errno) {
      echo "Failed to connect to MySQL:" . $conection -> connect_error;
      exit();
    }
    $conection -> query("INSERT INTO firma (navn, orgnummer, adresse, postnummer) VALUES ('" . $Firma_id . "', '". $Organisjonsnummer . "', '" . $Adresse . "', '" . $Postnummer . "')");
  ?>
  <div class = Form> 
    <p>Takk for at du har meldt deg inn som medlem i Sebastian's den. 
  </div>
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
</body>
</html>