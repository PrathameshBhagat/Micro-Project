<?php
$a=$_POST["N"];
$b=$_POST["N1"];
if(isset($_POST["N2"]))$c=$_POST["N2"];
if(isset($_POST["N3"]))$d=$_POST["N3"];
$myfile = fopen("c.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $a." ".$b." ".$c." ".$d." "."l");

fclose($myfile);

header("Location: joy.php",TRUE,301);
?>
