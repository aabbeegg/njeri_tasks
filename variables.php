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
//global scope

//local scope
function test(){
    $a = 28;
    echo $a;
    global $fname;
}
test();
echo $fname . " " . $lname;
?>

</body>
<?php include"l.footer.php" ?>
