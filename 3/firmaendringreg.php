<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
  <title>Busy prosjekt</title>
  <?php 
      $Tlf = $_POST["tlf"];
      $Adresse = $_POST["adresse"];
      $Navn = $_POST["navn"];
      $Postnummer = $_POST["postnummer"];
      $Organisjonsnummer = $_POST["orgnummer"];
    ?>
</head>
<body>
  <div class="header">
    <h1>Firma endring</h1>
  </div>
  <div class="topnav">
    <a href="./firmakontakter.php">Firmakontakter</a>
    <a href="./firmasøkmodul.php">Firma søk</a>
    <a href="./firmasletting.php">Firma sletting</a>
    <a href="./personkontakter.php">Personkontakter</a> 
    <a href="./personsøkmodul.php">Person søk</a>
    <a href="./personsletting.php">Person sletting</a>
    <a href="./">Forside</a>
  </div>
  <?php 
    $conection = new mysqli("localhost","root","","busy"); 
    if ($conection -> connect_errno) {
      echo "Failed to connect to MySQL:" . $conection -> connect_error;
      exit();
    }
  ?>
  <div class = Form> 
    <p>Takk for at du har meldt deg inn som medlem i Sebastian's den. 
  </div>
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
</body>
</html>