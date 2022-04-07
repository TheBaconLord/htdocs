<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">
    <title>Busy prosjekt</title>
</head>
<body>
  <div class="header">
    <h1>Person søk</h1>
  </div>
  <div class="topnav">
    <a href="./firmakontakter.php">Firmakontakter</a> 
    <a href="./firmasøkmodul.php">Firma søk</a>
    <a href="./firmasletting.php">Firma sletting</a>
    <a href="./personkontakter.php">Personkontakter</a>
    <a href="./personsletting.php">Person sletting</a>
    <a href="./">Forside</a>
  </div>
  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
  <div>
    <form method="POST" action="./personsøkmodulreg.php" class="Form"> <br>
    Fornavn <input type="text" name="navn"> <br>
    Etternavn <input type="text" name="etternavn"> <br>
    Title <input type="text" name="title"> <br>
    Epost <input type="text" name="epost"> <br>
    Tlf <input type="text" name="tlf"> <br>
      <input type="submit" value="submit">
    </form>
  </div>
</body>
</html>