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
    $vekt = $_POST["weight"];
    $høyde = $_POST["height"];
    
    function BMI ($vekt, $høyde){
        $BMI = round($vekt/(($høyde/100)*($høyde/100)), 2);
        return $BMI;
    }
    
    $BMI = BMI($vekt, $høyde);
  
    if ($BMI <= 18.5) {
        $output = "Under Vektig";
    } elseif ($BMI > 18.5 AND $BMI<=24.9 ) {
        $output = "Normal vekt" ;
    } elseif ($BMI > 24.9 AND $BMI <=29.9) {
        $output = "Over vektig" ;
    } elseif ($BMI > 30.0) {
        $output = "Hva er du? et fjell?, få deg hjelp!";
    }  
echo "<p>Din vekt er ". $BMI . " og du er ";
echo "$output</p>";
}
?> 
</body>
</html>
