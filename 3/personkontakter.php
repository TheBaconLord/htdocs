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
      $connection = new mysqli("localhost","my_user","my_password","my_db");
      if ($connection -> connect_errno) {
        echo "Failed to connect to MySQL:" . $connection -> connect_error;
        exit();
      }
      
    ?>
  </div>
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
  <div>
    <form method="POST" action="" class="Form"> <br>
    Fornavn <input type="text" name="name" required> <br>
    Etternavn <input type="text" name="" required> <br>
    Title <input type="text" name="" required> <br>
    Epost <input type="text" name="" required> <br>
    Tlf <input type="text" name="" required> <br>
      <input type="submit" value="submit">
    </form>
  </div>
</body>
</html>