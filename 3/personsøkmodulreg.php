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
    <h1>Person søk</h1>
  </div>
  <div class="topnav">
    <a href="./firmakontakter.php">Firmakontakter</a>
    <a href="./personkontakter.php">Personkontakter</a>
    <a href="./firmasøkmodul.php">Firma søk</a>
    <a href="./">Forside</a>
  </div>
  <div class = Form>
    <p><br>Her er søke resultatenen </p> 
  </div>
  <?php 
    $connection = new mysqli("localhost","root","","busy");
    if ($connection -> connect_errno) {
      echo "Failed to connect to MySQL:" . $connection -> connect_error;
      exit();
    }
    $sql = "SELECT * FROM personer WHERE navn = '$Fornavn' or etternavn ='$Etternavn' or title = '$Title' or epost = '$Epost' or tlf = '$Tlf'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)) {
        echo "  " . $row["navn"]. "  " . $row["etternavn"]. "<br>";
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