<?php
$title = "Update your info";
include '../njeri_tasks/l.header.php';
$a = $_GET['id'];
include 'db.php';
$result=mysqli_query($conn," Select * from studentinfo
where id='$a' ");
$row=mysqli_fetch_array($result);
?>
<h2>Update your info below</h2>

<form name="update" method="post" action="">
    <input type="text" name="fname" placeholder="First Name" required value="<?php echo $row['fname']; ?>"><br><br>
    <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname']; ?>"><br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city']; ?>"><br><br>
    <select name="groupid" value="<?php echo $row['groupid']; ?>">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP22">BBCAP23</option>
        <option value="BBCAP22">Others</option>
    </select><br><br>
    <input type="submit" name="Update" value="Update your info">
    <input type="submit" name="Delete" value="Delete your info">
</form>

<?php 
if(isset($_POST['Update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    $query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname', lname='$lname' , 
    city='$city' , groupid='$groupid' where id='$a' ");

if($query){
    echo "<h2> Your information is updated successfully</h2>";
}else{
    echo "<h2> Your information is not updated</h2>";
}
} 
$sql = "DELETE FROM studentinfo WHERE 'Delete' ";
if(isset($_POST['Delete'])){

    if ($conn->query($sql) === TRUE) {
      echo "Records deleted successfully";
    } else {
      echo " Error deleting record: " . $conn->$error;
    }
    
    $conn->close();

}
?>
