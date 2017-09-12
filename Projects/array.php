<?php
$array1=array(1,2,34,5,6);
$array2=array(
     "asd1" =>"Html",
     "asd2" =>"Css",
     "asd3" =>"JavaSript",
     "asd4" =>"php"
	);
$array3=array(
        array(1,2,3,4,5,6),
        array(10,20,30,40,50,60),
        array(01,02,03,04,05,06),
        array(100,200,300,400,500,600),
	);
// the key must be unique
$array4=array(
    "asd1" =>    array(1,2,3,4,5,6),
    "asd2" =>    array(10,20,30,40,50,60),
    "asd3" =>    array(01,02,03,04,05,06),
    "asd4" =>    array(100,200,300,400,500,600),
	);
$array5=array(
    "asd1" => array(
                "Destlan1" => "java",
                "Destlan2" => "C#",
                "Destlan3" => "C++",
                "Destlan4" => "swift",
                "Destlan5" => "objective c" 
    	      ),
    "asd2" => array(
                "weblan1" => "javaSript",
                "weblan2" => "html",
                "weblan3" => "Css",
                "weblan4" => "php",
                "weblan5" => "bootstarp" 
    	      ),
    "asd3" => array(
                "otherlan1" => "prolog",
                "otherlan2" => "SQL"
    	      )
	);
echo "<pre>";
echo "indexed array ==\r\n";
print_r($array1);
echo "associated array<br>";
print_r($array2);
echo "multi indexed array<br>";
print_r($array3);
echo "multi associated with indexed array<br>";
print_r($array4);
echo "multi associated array<br>";
print_r($array5);
echo "</pre>";
echo "indexed array<br>";
foreach ($array1 as $value) {
	echo "Value is:$value<br>";
}
echo "<br><br>";
echo "associated array<br>";
foreach($array2 as $key =>$value){
	echo "the key is:$key ,the value is:$value<br>";
}
echo "<br><br>";
echo "multi indexed array<br>";
foreach ($array3 as $value) {
	foreach ($value as $val) 
		echo "$val ,";
	echo "<br>";
}
echo "<br><br>";
echo "multi associated with indexed array<br>";
foreach ($array4 as $key => $value) {
	echo "the key is:$key :";
	foreach ($value as $val) 
		echo "$val ,";
	echo "<br>";
}
echo "<br><br>";
echo "multi associated array<br>";
foreach ($array5 as $key => $value) {
	echo "the key is:$key :<br>";
	foreach ($value as $k => $val) 
		echo "======>the key is:$k the value is:$val <br>";
	echo "<br>";
}
echo "<br><br>";
/*array funtion is 
 *search funtion
 *in_array($value,array,(true or false)=>identical or not );
 *array_search($value,array,(true or false)=>identical or not )
 *array_key_exists($value,array)
 * add funtion
 *array_push(array, var,.....)add item on the bottom of array
 *array_unshift(array, var,..)add item on the top of array
 *remove funtion
 *array_pop($array1) return and remove the last item
 *array_shift($array1)  return and remove the first item
 *sort funtion
 *sort($array1,sorting type) for indexed array
 *rsort($array1,sorting type) for indexed array 
 *asort($array1,sorting type)sort value for associzted array
 *arsort($array1,sorting type)sort value for associzted array 
 *ksort($array1,sorting type)sort key for associzted array
 *krsort($array1,sorting type)sort key for associzted array 
 */
sort($array1);
echo "<pre>";
print_r($array1);
echo "</pre>";
array_push($array1,5);
array_unshift($array1, 10,20,30);
echo "<pre>";
print_r($array1);
echo "</pre>";
$val=array_pop($array1);
$val1=array_shift($array1);
echo "$val , $val1 "." <br>";
echo "<pre>";
print_r($array1);
echo "</pre>";
if (in_array("Html", $array2,true)) {
  	echo "true<br>";
  }else
    echo "false<br>";
$res = array_search("Html", $array2,true);
echo "$res<br>";
if (array_key_exists("asd1", $array2)) {
  	echo "true<br>";
  }else
    echo "false<br>";



?>