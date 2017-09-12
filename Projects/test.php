<?php
$school = "UW";          # global
function downgrade() {
global $school;
$suffix = "Tacoma"; # local
$school = "$school $suffix";
$GLOBALS['school'].=" second word";

echo  $GLOBALS['school']."<br>"; 
print "$school<br>";
}

downgrade();
///////////////////////
$array = array("Mostafa","AbdEl_Fatah","mohamed","ali");
$string = implode(".", $array);
echo "$string<br>";
list($value1,$value2,$value3,$value4)=explode(".", $string);
echo "$value1 ,$value2 ,$value3 ,$value4<br><br>";
///////////////////files///////////////////////
$filecontent=file_get_contents("mostafa.txt");
echo "$filecontent<br>";
$linesOfFile=explode("\n", $filecontent);
foreach ($linesOfFile as $value) {
	echo "$value<br>";
}
echo "<br><br><br>";
$new=array_reverse($linesOfFile);
foreach ($new as $value) {
	echo "$value<br>";
}
$data=implode("\n", $new);
file_put_contents("mostafa.txt", $data);
$files = scandir(dirname(__FILE__));
echo "<pre>";
print_r($files);
echo "</pre>";




?>