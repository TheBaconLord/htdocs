<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
    <title>Busy prosjekt</title>
    <?php 
      $Firmanavn = $_POST["navn"];
      $Orgnummer = $_POST["orgnummer"];
    ?>
</head>
<body>
  <div class="header">
    <h1>firma sletting</h1>
  </div>
  <div class="topnav">
    <a href="./firmakontakter.php">Firmakontakter</a>
    <a href="./firmasøkmodul.php">Firma søk</a>
    <a href="./firmaendring.php">Firma endring</a>
    <a href="./personkontakter.php">Personkontakter</a>
    <a href="./personsøkmodul.php">Person søk</a>
    <a href="./personsletting.php">Person sletting</a>
    <a href="./">Forside</a>
  </div>
  <div class = Form>
    <p><br></p> 
  </div>
  <?php 
    $connection = new mysqli("localhost","root","","busy");
    if ($connection -> connect_errno) {
      echo "Failed to connect to MySQL:" . $connection -> connect_error;
      exit();
    }
    $DEL = "DELETE FROM firma WHERE navn = '$Firmanavn' and orgnummer = '$Orgnummer'";

    if ($connection->query($DEL) == TRUE) {
        echo "<p> Ditt firma er nå blit slettet </p>";
    } else {
        echo "<p> Error, vi klarte ikke å slette firmaet ditt </p>" . $connection->error;
    }
  ?>
  
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
</body>
</html> 