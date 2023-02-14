<?php
$title="Reading the data from the database";
include"../njeri_tasks/l.header.php";

$sql = "select * from studentinfo";
$result = $conn -> query($sql);
if($result->num_rows > 0){
    echo"
    <table class='table'>
        <tr><th>ID</th><th>First Name</th><th>Last Name</th>
        <th>City</th><th>Group</th></tr>";
    
        while($row = $result ->fetch_assoc()){
        echo "
        <tr>
        <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
        <td><a href='updatesingle.php?id=$row[fname]'>$row[fname]</a></td>
        <td><a href='updatesingle.php?id=$row[lname]'>$row[lname]</a></td>
        <td><a href='updatesingle.php?id=$row[city]'>$row[city]</a></td>
        <td><a href='updatesingle.php?id=$row[groupid]'>$row[groupid]</a></td>
        </tr>";
}
  echo "</table>"; 
}

else{
    echo"NO RESULTS";
}
$conn->close();

?>
<?php
include"../njeri_tasks/l.footer.php";
?>
