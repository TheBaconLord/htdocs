<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
    <title>Busy prosjekt</title>
    <?php 
      $Fornavn = $_POST["navn"];
      $Etternavn = $_POST["etternavn"];
      $Epost = $_POST["epost"];
    ?>
</head>
<body>
  <div class="header">
    <h1>Perosn sletting</h1>
  </div>
  <div class="topnav">
    <a href="./firmakontakter.php">Firmakontakter</a>
    <a href="./firmasøkmodul.php">Firma søk</a>
    <a href="./firmaendring.php">Firma endring</a>
    <a href="./firmasletting.php">Firma sletting</a>
    <a href="./personkontakter.php">Personkontakter</a>
    <a href="./personsøkmodul.php">Person søk</a>
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
    $DEL = " DELETE FROM personer WHERE navn = '$Fornavn' and etternavn = '$Etternavn' and epost = '$Epost'";

    if ($connection->query($DEL) == TRUE) {
        echo "<p> Person er nå blit slettet </p>";
    } else {
        echo "<p> Error, vi klarte ikke å slette firmaet ditt </p>" . $connection->error;
    }
  ?>
  
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
</body>
</html> 