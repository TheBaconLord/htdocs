<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
    <title>Busy prosjekt</title>
    <?php 
      $Firmanavn = $_POST["firmanavn"];
    ?>
</head>
<body>
  <div class="header">
    <h1>firma søk</h1>
  </div>
  <div class="topnav">
    <a href="./firmakontakter.php">Firmakontakter</a>
    <a href="./firmaendring.php">Firma endring</a>
    <a href="./firmasletting.php">Firma søk</a>
    <a href="./personkontakter.php">Personkontakter</a>
    <a href="./personsøkmodul.php">Person søk</a>
    <a href="./personsletting.php">Person sletting</a>
    <a href="./">Forside</a>
  </div>
  <div class = Form>
    <p><br>Her er resultatene fra ditt søk  </p> 
  </div>
  <?php 
    $connection = new mysqli("localhost","root","","busy");
    if ($connection -> connect_errno) {
      echo "Failed to connect to MySQL:" . $connection -> connect_error;
      exit();
    }
    $sql = "SELECT * FROM firma WHERE navn like '%$Firmanavn%'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)) {
        echo "  " . $row["navn"]. "<br>";
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