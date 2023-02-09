<?php
$courses=array("PHP","HTML","JavaScript","CMS","Project");
echo "I like " . $courses[0] . ", " . $courses[1] . " , " . $courses[2] . $courses[3] . $courses[4] .".";
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[4]);
echo "I like " . $courses1[0] . ", " . $courses1[1] . " , " . $courses1[2] . $courses[3] .".";
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);

ksort($courses3);

arsort($courses3);

krsort($courses3);

$courses4=array("php", "html", "javascript", "cms", "project");

?>