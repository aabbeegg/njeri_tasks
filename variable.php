<?php include"l.header.php" ?>
<body color="purple">
<h1>Exercise 3</h1>
<h3>Hello. You are welcome to my site</h3>
<form>
   
<div class="row">
    <div class="col">
    Fname <input type="text" name="fname">  
    </div>
    <div class="col">
    Lname <input type="text" name="lname">  
    </div>
</div>
<br>
<br>
<div class="row">
    <div class="col">
    Date <input type="text" name="Birth Date">
    </div>
    <div class="col">
    Password <input type="password" name="pwd"> 
    </div>
</div>
<br>
<br>
<div class="row">
    <div class="col">
    Your favorite color <input type="color" id="favcolor" name="favcolor" value="pink">
    </div>
    <div class="col">
    Submit <input type="submit" name="Submit">
    </div>
</div>

</form>

<h3> 3.5 Table and variables </h3>
<?php
$g1=5;
$g1=4;
$g1=5;
"echo"
?>

<table>
<tr>
<th> S.N </th><th> Name </th> Grade </th>
</tr>

<tr>
<td> 1 </td><td> Pekka </td> <td> $g1 </td>
</tr>
<tr>
<td>3 </td><td> Johanna </td> <td> $g2 </td>
</tr>
<tr>
<td> 3 </td><td> John </td> <td> $g3 </td>
</tr>
</table>


<?php 
 $language1="Beverly";
 $language2="HTML";
function text1(){
    $language1="Beverly ";
    $language2="HTML";
    $text3 = $language1." ". $language2;
}
text1();

echo $language1 . " " . $language2 ;

echo strlen($language1." ".$language2);

    $a = 298;
    $b = 234;
    $c = 46;
    $sum= $a + $b + $c;
    
    echo $sum;
echo $_SERVER['HTTP_USER_AGENT'];
?>  


</body>
<?php include"l.footer.php" ?>