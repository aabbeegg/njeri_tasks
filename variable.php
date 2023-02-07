<?php include"l.header.php" ?>
<h1>Exercise 3</h1>
<h3>Hello. You are welcome to my site</h3>
<form>

    First name <input type="text" name="fname">
    Last name <input type="text" name="fname">
    Date <input type="text" name="Birth Date">
    Password <input type="password" name="pwd">
    Your favorite color <input type="color" id="favcolor" name="favcolor" value="pink">
    Submit <input type="submit" name="Submit">
    <input type="submit" value="Submit">

</form>



<?php 
 $language1="PhP";
 $language2="HTML";
function text1(){
    $language1="PhP";
    $language2="HTML";
    echo text1();
}
text1();
echo $language1 . " " . $language2;



?>


<?php include"l.footer.php" ?>