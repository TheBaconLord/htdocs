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
      $Firma_id = $_POST["firma_id"];
    ?>
</head>
<body>
  <div class="header">
    <h1>Person søk</h1>
  </div>
  <div class="topnav">
    <a href="./firmakontakter.php">Firmakontakter</a> 
    <a href="./firmasøkmodul.php">Firma søk</a>
    <a href="./firmaendring.php">Firma endring</a>
    <a href="./firmasletting.php">Firma sletting</a>
    <a href="./personkontakter.php">Personkontakter</a>
    <a href="./personsletting.php">Person sletting</a>
    <a href="./">Forside</a>
  </div>
  <div class = Form>
    <p><br>Her er resultatet fra ditt søk </p> 
  </div>
  <?php 
    $connection = new mysqli("localhost","root","","busy");
    if ($connection -> connect_errno) {
      echo "Failed to connect to MySQL:" . $connection -> connect_error;
      exit();
    }
    $sql = "SELECT * FROM personer WHERE navn like '%$Fornavn%' and etternavn like '%$Etternavn%' and title like '%$Title%' and epost like '%$Epost%' and tlf like '%$Tlf%' and firma_id like '%$Firma_id%'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)) {
        echo "  " . $row["navn"]. "  " . $row["etternavn"]. "  " . $row["firma_id"] . "<br>";
      }
    } else {
      echo "0 results";
    }
  ?>
  
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
</body>
</html> 