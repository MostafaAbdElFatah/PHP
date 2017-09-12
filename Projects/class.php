<?php
class cal{
	 private $number1;
	 private $number2;
	 private $op_type;
     public function cal($value='constrcutor')
     {
     	echo "this is value $value<br>";
     }
     public function __destruct()
     {
     	echo "this class Going to Destruct <br>";
     }

	 function setValue($n1,$n2){
        $this->number1 = $n1;
        $this->number2 = $n2;
	 }

	 function setOp($op){
	 	$this->op_type = $op;
	 }
	 function Calculate(){
	 	switch ($this->op_type) {
	 		case '+':
	 			echo "tis is Result ". $this->number1 + $this->number2 ."<br>";
	 			break;
	 		case '-':
	 			echo "tis is Result ". $this->number1 - $this->number2 ."<br>";
	 			break;
	 		case '*':
	 			echo "tis is Result ". $this->number1 * $this->number2 ."<br>";
	 			break;
	 		case '/':
                if ($this->number2 == 0 ) {
                	echo "Can't Division to Zero";
                }else
                  echo "tis is Result ". $this->number1 / $this->number2 ."<br>";
	 			break;
	 		
	 		default:
	 			echo "Please set Opertion";
	 			break;
	 	}
	 }
}
$val=new cal();
$val->setValue(20,50);
$val->setOp('/');
$val->Calculate();
$val=new cal("addition ");
$val->setValue(20,50);
$val->setOp('+');
$val->Calculate();
?>