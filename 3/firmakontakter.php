<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
  <title>Busy prosjekt</title>
</head>
<body>
  <div class="header">
    <h1>Firmakontakter</h1>
  </div>
  <div class="topnav">
  <a href="./personkontakter.php">Personkontakter</a>
  <a href="./">Forside</a>
  </div>

  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
  <div>
    <form method="POST" action="./firmakontakterreg.php" class="Form"> <br>
    Firma Navn <input type="text" name="" required  > <br>
    Adresse <input type="text" name="" required > <br>
    Postnummer <input type="text" name="" required > <br>
    Tlf <input type="text" name="" required> <br>
    Organisasjonsnummer <input type="text" name="" required > <br>
    Leverandør  <input  type="radio" name="" value="" > <br>
      <input type="submit" value="submit">
    </form>
  </div>
</body>
</html>