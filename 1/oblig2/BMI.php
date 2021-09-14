<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../main.css">
<link rel="stylesheet" href="oblig2.css">

    <title>BMI</title>
</head>
<body>
<div class="header">
  <h1>BMI kalkulator</h1>
</div> <div class="footer">
   <p id="sebastianhauglid">Sebastian Hauglid</p>
 </div>
<?php
  $navn = $_POST["name"];
  $høyde =$_POST["height"];
  $vekt =$_POST["weight"];
  $kjønn =$_POST["gender"];
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST["gender"] == "male"){
        $male = true;
    } else {
        $male = false;
    }
    $vekt = $_POST["weight"];
    $høyde = $_POST["height"];
    function BMI ($vekt, $høyde){
        $BMI = round($vekt/(($høyde/100)*($høyde/100)), 2);
        return $BMI;
    }
    
    $BMI = BMI($vekt, $høyde);
  
    if ($BMI <= 18.5) {
        $output = ($male) ? "du er Under Vektig": "du er litt tynn kanskje?"; 
    } elseif ($BMI > 18.5 AND $BMI<=24.9 ) {
        $output = ($male) ? "du er Normal vekt" : "du er helt perfekt!";
    } elseif ($BMI > 24.9 AND $BMI <=29.9) {
        $output = ($male) ? "Over vektig" : "Kanksje på tide å trene litt?";
    } elseif ($BMI > 30.0) {
        $output = ($male) ? "Hva er du? et fjell?, få deg hjelp!": "Tror at et trenings abenomang kan hjelpe.";
    }  
echo "<p>Din vekt er ". $BMI . " og  ";
echo "$output</p>";
}
?> 
</body>
</html>
