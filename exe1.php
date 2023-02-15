<?php include"l.header.php" ?>

            <h1>PHP is interesting</h1>
<?php
//opening range
echo "Hello World<br>";
echo "This is \"very \" good<br>";
echo "Njeri, BBCAP23";
echo "sup <br>";
?>
<h2>Current date</h2>
<?php echo "My name is \"Njeri\"<br>";
echo date("d.m.Y")?>

<h3> 3.4 Variable in php </h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . " <h1> "; ?>

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
<h3>Screenshot of task 1</h3>
<img src="screenshot.png" alt = "task 1 screenshot" height="auto" width="650px">
<?php include"l.footer.php" ?>