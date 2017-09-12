<?php
echo "Hello in php";
for ($x =1;$x<=10;$x++)
         echo ("hello programming is fun<br>");
?>
<?php
	print("Hello, world!\n");#\n han no efect
?><br>
<?php
	print("\"Hello\", \'world\'!");
?><br>
<?php
	print('\"Hello\", \'world\'!\n');
?><br>
<?php
	$fstring ="Hello , world";
	print(" String is begin ".$fstring[4]);
?><br>
<?php
	$fstring.=" php is fun";
	print($fstring);
?><br>
<?php
	$length=strlen($fstring);
    print(" Length is : ".$length);
?><br>
<?php
    $index=strpos($fstring,'w');
    print(" W in index: ".$index);
?><br>
<?php
    $sub = substr($fstring, 5);
    print(" substring start from index 5: ".$sub);
?><br>
<?php
    print("  string to upper: ".strtoupper($fstring));
?><br>
<?php
    print(" in \" the can call variables:$fstring ");
?><br>
<?php
    print('    in \' the can\'t call variables:$fstring ');
?><br>
<?php
    $age=21;
    print "Today is your {$age}th birthday.".'use {$age}';
?><br>
<?php
     print "for statament";
?><br>
<?php
	for ($i = 0; $i < 10; $i++) { 
		print "$i squared is " . $i * $i . ".\n";
        ?><br>
        <?php
	}
	 print "if statament";
?><br>
<?php
    $name = NULL; 
    if (isset($name)) {# isset if has value return true
     print("variables is't null:$name");
     ?><br>
     <?php
    }else {
	 print("variables is null:$name");
     ?><br>
     <?php
    }
    $name=50;
    if (isset($name)) {
	 print("variables is't null:$name");
     ?><br>
     <?php
    }else {
	 print('variables is null:$name');
     ?><br>
     <?php
    }
    for ($i=1; $i <=6 ; $i++) { 
    ?>
    <h<?= $i ?>>this is level <?= $i ?> heading</h<?= $i ?>>
    <?php
    }
    function mytext($value1,$value2,$value3,$value4='Default')
    {
       print("this is value1: $value1 this is value2: $value2 this is value3:$value3 this is Default value4:$value4");
    }
    mytext(5,12,90);
    // array creating 
    $arrayName = array();
    $arrayName = array(1,2,3,58,89,5);
    $arrayName[3]=100;
    $arrayName[]=200;
    ?><br>