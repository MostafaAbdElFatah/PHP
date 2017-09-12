<?php
 $color  = array("white","green","red");
 for ($i=0; $i <count($color) ; $i++) { 
 	echo $color[$i].",";
 }
 echo "<br>";
 echo "<ol type='a' >";
 for ($i=0; $i <count($color) ; $i++) { 
 	echo "<li>". $color[$i]."</li>";
 }
 echo "</ol>";
 echo "<select>";
 for ($i=0; $i <count($color) ; $i++) { 
	echo "<option>$color[$i]</option>";
}
echo "</select>";
?>