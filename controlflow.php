<?php include "header.php" ?>

<?php
// Prints the month 
echo "We're in the month of ";
echo date('F') . "<br>";
//echo "Not August, this is . " + gmdate(" F") + " . so I don't have any holidays";
if (date('F')) {
  echo " This is " . date('F') . " so I don't have any holidays";
} else {
  echo "It's August, so it's still holiday.";
}
?>
<br>
<br>
<?php
function output1()
{
  $color = "red";
  if ($color = "red") {
    echo "The color is red.";
  } else {
    echo "The color is not red.";
  }
  echo output1();
}

//Write a program to grade students based on their total score for a subject. 
//Use variable to hold the total score. The grading scheme is: 
/*Excellent: >80; 
Great >70 & less than 80;
Good >60 & less than 70; 
Pass >50 & less than 60
Fail <50*/
$score = 20;
$excellent = 80;
$great = 70;
$good = 60;
$fail = 50;
if ($score > 80) {
  echo "Excellent!";
} else if ($score >= 70) {
  echo "Great!";
} else if ($score >= 60) {
  echo "Good!";
} else if ($score <= 50) {
  echo "Fail";
}
?>

<?php 
echo "Put in your information to verify if you are eligible to vote";
?>

<form method="post" action="">

  Name: <input type="text" name="name" required>
  Age: <input type="text" name="age" required>
  City: <input type="text" name="age" required>
  <input type="submit" name="submit" value="Submit">
</form>
<?php

if (isset($_POST['submit'])) {
  $name = $_POST["name"];
  $age = $_POST["age"];
  if ($age > 18) {
    echo '$name' + ". You're eligible to vote";
  } else {
    echo '$name' + "You're not eligible to vote";
  }
}
?>

<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$browser = "Mozilla";
switch ($user_agent) {
  case (strpos($user_agent, 'Mozilla') == true);
}



/*Write a program to get inputs (age and name) from the user and based on their age, 
decide if he/she is eligible for voting. 
(18 or more than 18 years is eligible for voting,)*/
?>
<?php include "l.footer.php" ?>