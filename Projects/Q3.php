<?php
function GetWebPage()
{
echo "
<!DOCTYPE HTML>
<html>
   <head>
      <style> 
            body{background:#aaa;}
            div{float:left;background:#ccc;margin-right:300px;}
            ul { margin:0px 50px;list-style:georgian;font-size:30px;}
           
            ul li:hover{background:#ddd;color:#aaa;cursor: wait;}
            select {width:200px;height:40px;} 
      </style>
   </head>
   <body>
   <div>
   <ul>";
for ($i=1; $i <=50 ; $i++) { 
	echo "<li>item$i</li>";
}
echo "</ul></div><br>";
echo "    
        <select>";
$array = array();
for ($i=1; $i <=20 ; $i++) { 
	$array["it$i"]="item $i";
} 
foreach ($array as $key => $value) {
	echo "<option value=\"$key\">$value</option>";
} 
echo " 	        
	   </select>
	  <br>
	";
echo "
   </body>
</html>
";


}


GetWebPage();


?>