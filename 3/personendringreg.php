<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
    <title>Busy prosjekt</title>
    <?php 
      $Tlf = $_POST["tlf"];
      $Epost = $_POST["epost"];
      $Title = $_POST["title"];
      $Fornavn = $_POST["navn"];
      $Etternavn = $_POST["etternavn"];
    ?>
</head>
<body>
  <div class="header">
    <h1>Person endring</h1>
  </div>
  <div class="topnav">
  <a href="./firmakontakter.php">Firmakontakter</a>
  <a href="./firmasøkmodul.php">Firma søk</a>
  <a href="./firmasøkmodul.php">Firma sletting</a>
  <a href="./personsøkmodul.php">Person søk</a>
  <a href="./personsletting.php">Person sletting</a>
  <a href="./">Forside</a>
  </div>
  <?php 
    $connection = new mysqli("localhost","root","","busy");
    if ($connection -> connect_errno) {
      echo "Failed to connect to MySQL:" . $connection -> connect_error;
      exit();
    }
  ?>
  <div class = Form>
    <p><br>Takk for at du har meldt deg inn som medlem i Sebastian's den. </p> 
  </div>
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
</body>
</html> 