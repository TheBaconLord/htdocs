<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="main2.css">
    <title>Oblig 2</title>

</head>
<body>
<div class="header">
  <h1>BMI kalkulator</h1>
</div>


 <div class="footer">
   <p id="sebastianhauglid">Sebastian Hauglid</p>
 </div>
 <form action="">
  <input type="text" name="name" required> Navn<br>
  <input type="text" name="height" required  > Høyde<br>
  <input type="text" name="weight" required > Din vekt<br>
  <input type="radio" name="gender" value="female"> Kvinne<br>
  <input type="radio" name="gender" value="male"> Mann<br>
  <input type="submit" value="submit">
</form>

<?php
  $navn = $_POST["name"];
  $høyde =$_POST["height"];
  $vekt =$_POST["weight"];
  $kjønn =$_POST["gender"];



?>



</body>
</html>