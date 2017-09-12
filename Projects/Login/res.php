<?php
  $name=$_POST["name"];
  $pass=$_POST["pass"];
  $arr=File('data.txt');
  $bool=false;
  for ($i=0; $i <count($arr) ; $i++) { 
  	$strarr=explode(" ", $arr[$i]);
  	if($strarr[$i]==$name && $strarr[$i]==$pass){
       echo "You Can logining";
       $GLOBALS['bool']=true;
       break;
  	}
  }
  if ($bool==false){
    echo "You Can not logining";
  }
  
?>