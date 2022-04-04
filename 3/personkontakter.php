<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
    <title>Busy prosjekt</title>
</head>
<body>
  <div class="header">
    <h1>Personkontakter</h1>
  </div>
  <div class="topnav">
  <a href="./firmakontakter.php">Firmakontakter</a>
  <a href="./firmasøkmodul.php">Firma søk</a>
  <a href="./personsøkmodul.php">Person søk</a>
  <a href="./">Forside</a>
  </div>
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
  <div>
    <form method="POST" action="./personkontakterreg.php" class="Form"> <br>
    Fornavn <input type="text" name="navn" required> <br>
    Etternavn <input type="text" name="etternavn" required> <br>
    Title <input type="text" name="title" required> <br>
    Epost <input type="text" name="epost" required> <br>
    Tlf <input type="text" name="tlf" required> <br>
      <input type="submit" value="submit">
    </form>
  </div>
</body>
</html>