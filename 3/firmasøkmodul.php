<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
  <title>Busy prosjekt</title>
</head>
<body>
  <div class="header">
    <h1>Firma søk</h1>
  </div>
  <div class="topnav">
    <a href="./firmakontakter.php">Firmakontakter</a>
    <a href="./personkontakter.php">Personkontakter</a>
    <a href="./personsøkmodul.php">Person søk</a>
    <a href="./">Forside</a>
  </div>

  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
  <div>
    <form method="POST" action="./firmasøkmodulreg.php" class="Form"> <br>
    Firma Navn <input type="text" name="firmanavn" required  > <br>
    Adresse <input type="text" name="adresse" required > <br>
    Postnummer <input type="text" name="postnummer" required > <br>
    Tlf <input type="text" name="tlf" required> <br>
    Organisasjonsnummer <input type="text" name="orgnummer" required > <br>
      <input type="submit" value="submit">
    </form>
  </div>
</body>
</html>