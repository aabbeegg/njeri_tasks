
<?php $title = "Javascript events and form validation";
include "header.php" 
?>

<h3> A simple button to display date </h3>
<button onclick="this.innerHTML=Date()">click to know the date</button>

<h3> A simple button to display date </h3>
<button onclick="getElementById('p1').innerHTML=Date()">click to know the date</button>
<p id="p1"> </p>

<h3> Change background color </h3>
<form>
  <input type="color" id="background" onchange="changeColor()">  
</form>

<h3> Change font color </h3>
<form>
  <input type="color" id="b1" onchange="changeFColor()">  
</form>

<h3> on mouse hover & on mouse out </h3>
<span onmouseover="this.style.color='blue';
this.style.backgroundColor='red';
this.style.fontSize='2em'";
onmouseout="
this.style.backgroundColor='yellow';
this.style.backgroundColor='white';
this.style.fontSize='1.1em'";
>Some text</span>
<?php include"l.footer.php" ?>