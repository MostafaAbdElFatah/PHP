<?php
$fahrenheit=-50;
$celsius=-50;
echo "<table align='center' border='1' width='50%'>";
	echo "<tr>";
		echo "<td align='center' colspan='2'>Convert from Fahrenheit to Celsius</td>";
		echo "<td align='center' colspan='2'>Convert from Celsius to Fahrenheit</td>"; 
	echo "</tr>";
	echo "<tr>";
		echo "<td align='center'>Fahrenheit</td>"; 
		echo "<td align='center'>Celsius</td>"; 
		echo "<td align='center'>Celsius</td>"; 
		echo "<td align='center'>Fahrenheit</td>"; 
	echo "</tr>";
	while ($fahrenheit <= 50) {
	    echo "<tr>";
		    echo "<td align='center'>{$fahrenheit}F</td>"; 
		    echo "<td align='center'>".((($fahrenheit-32)*5)/9)."C</td>";
		    echo "<td align='center'>{$celsius}C</td>"; 
		    echo "<td align='center'>".((($celsius*9)/5)+32)."F</td>"; 
	    echo "<tr>";
	    $fahrenheit+=5;
	    $celsius+=5;
	}
echo "</table>";
?>