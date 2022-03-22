<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="oblig2.css">
  <link rel="stylesheet" href="../main.css">
  <title>Oblig 2</title>

</head>
<body>
  <div class="header">
    <h1>BMI kalkulator</h1>
  </div>
  <div class="topnav">
    <a href="../">Til forside</a>
  </div>

  <div class="footer">
    <p id="sebastianhauglid">Sebastian Hauglid</p>
  </div>
  <div>
    <form method="POST" action="BMI.php" class="Form">
    Navn<input type="text" name="name" required> 
    Høyde <input type="text" name="height" required  > 
    Din vekt <input type="text" name="weight" required > 
    Kvinne <input  type="radio" name="gender" value="female" > 
    Mann  <input type="radio" name="gender" value="male" > 
    <input type="submit" value="submit">
    </form> 
  </div>  
</body>
</html>