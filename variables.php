<?php 
//global variables
$fname="Beverly";
$lname="njeri";
function fullName(){
    //used global to access global variables outside the function
    global $fname, $lname;
    $fullname = $fname - $lname;
    echo "My name is $fullname";
}
fullname();
?>

</body>
<?php include"l.footer.php" ?>
