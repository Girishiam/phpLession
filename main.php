<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Hello World!';?></h1><br>
    <?php $color = "red";
    // This is a single-line comment
    echo "My watch is " . $color . "<br>";
    echo "My house is " . $color . "<br>";
    echo "My phone is " . $color . "<br>";?>
    <?php 
    $var1=5;
    $var2=3;
    $var3=$var1+$var2;
    echo "Sum of the " .$var1."  " .$var2 ." is ".$var3. "<br>";
     
     ?>

<?php
$q = 5;
$p = 10;

function myTest() {
  $GLOBALS['r'] = $GLOBALS['q'] + $GLOBALS['p'];
}

myTest();
echo $r;
?>


<?php
$txt1 = "PHP Session";
$txt2 = "Loved Python had no other option :(";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP but " . $txt2 . "<br>";
print $x + $y;
?><br>


<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

<br>
<?php
echo strlen("Hello world!"); 
?>
<br>
<?php
$word_count = "This is for counting the words in a string";
echo str_word_count($word_count);
?>
<br>
<?php
echo strrev("Girish Mondal")."<br>"; 
?>



<?php
echo strpos("Hello world!", "world")."<br>"; 
?>

<?php
echo "Minimum and maximum value : ";
echo(min(0, 150, 30, 20, -8, -200)." ");  
echo(max(0, 150, 30, 20, -8, -200)." "); 
?>
<br>
<?php 
    define("pie",3.1416);
    echo pie;


?>
<br>

<!-- //function// -->
<?php
define("NAME", "Girish");

function func1() {
  echo NAME;
}
 
func1();
?>

<?php 
$a=20;
if ($a % 2 ==0){
    echo "Even Number";
}
else {
    echo "Odd Number";
}
?>

<br>
<br>

<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "color is red!";
    break;
  case "blue":
    echo "color is blue!";
    break;
  case "green":
    echo " color is green!";
    break;
  default:
    echo "color is neither red, blue, nor green!";
}
?>

<br>
<br>


<?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>

<br>
<br>

<?php
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
?>
<br>
<br>

<?php
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>


<?php 
$i=0;
for($i=0; $i<10;$i++){
    if ($i%2==0){
        echo "The even number is: $i <br>";
    }
}
?>

<?php
$colors = array("red", "green", "blue", "yellow");
$arrlength1 = count($colors);
for($i=0; $i< $arrlength1; $i++){
  echo $colors[$i] ;
  echo "<br>";
}
?>
<br>
<br>

<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
<br>
<br>
<h1>GET METHOD</h1><br>
<form action="" method="GET">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>


<br>
<br>

</body>
</html>