<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
    <title>Busy prosjekt</title>
    <?php 
      $Tlf = $_POST["tlf"];
      $Epost = $_POST["epost"];
      $Titel = $_POST["title"];
      $Fornavn = $_POST["navn"];
      $Etternavn = $_POST["etternavn"];
    ?>
</head>
<body>
  <div class="header">
    <h1>Personkontakter</h1>
  </div>
  <div class="topnav">
  <a href="./firmakontakter.php">Firmakontakter</a>
  <a href="./">Forside</a>
  </div>
  <div>
    <?php 
      $connection = new mysqli("localhost","root","","busy");
      if ($connection -> connect_errno) {
        echo "Failed to connect to MySQL:" . $connection -> connect_error;
        exit();
      }
      $connection -> query("INSERT INTO personer (navn, etternavn, title, epost, tlf) VALUES ('" . $Fornavn . "', '". $Etternavn . "', '" . $Titel . "', '" . $Epost . "', '" . $Tlf . "')");
    ?>
  </div>
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
</body>
</html> 