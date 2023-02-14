<?php
$title="A Simple crude app";
include"../l.header.php";
?>
<form method="post" action="">
    <input type="text" name="fname" placeholder="First Name" required >
    <input type="text" name="lname" placeholder="Last Name" required >
    <input type="text" name="city" placeholder="City" required >
    <select name="groupid">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP22">BBCAP23</option>
        <option value="BBCAP22">Others</option>
    </select><br><br>
    <input type="submit" name="submit" value="Submit">
</form>    
<?php
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$groupid=$_POST['groupid'];
include 'db.php';

$sql = "insert into studentinfo (fname, lname, city, groupid)
values('$fname', '$lname', '$city', '$groupid')";
}

if ($conn->query($sql) === TRUE ){
    echo "Your information is added successfully";
} else{
    echo "Error:" .$conn -> error;
}

?>

<?php
include"../l.footer.php";
?>