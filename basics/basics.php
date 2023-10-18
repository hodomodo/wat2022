<!DOCTYPE html>
<html>
<body>

<?php
$name = "Joseph";
$age = "22";
echo "Hi my name is $name and I am $age years old<br>";
echo "Mi nombre es $name y tengo $age anos de edad<br>";
?>
	
<h2>Functions</h2>

<?php
//gettype()returns..
echo gettype($name);
echo '<br />';
//strlen() returns..
echo strlen($name);
echo '<br />';
//strtoUpper()returns..
echo strtoUpper($name);
?>

<h2>Arithmetic</h2>
<?php
$num1 = "9";
$num2 = "12";
$div = number_format($num2/$num1, 2);
$times = $num1*$num2;
$percent = ($num1/$num2)*100;

echo "num1 = $num1<br>";
echo "num2 = $num2<br>";
echo "num1 x num2 = $times<br>";
echo "num1 as a percentage of num2  = $percent%<br>";
echo "num2 divided by num1  = $div<br>";
?>

<h2>Profile</h2>

<?php
$heightInMeters = "1.8";
$heightInFT = number_format((($heightInMeters*100)/2.54)/12, 1);
echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Height in Meters: $heightInMeters<br>";
echo "Height in Feet and inches: $heightInFT<br>";
?>




</body>
</html>