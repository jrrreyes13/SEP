<?php
include_once('jewelry.php');

class bracelette extends jewelry{
	
	public $size = '3mm';
	public $color = 'silver';
	public $price = '300';
	public $weight = '12g';

	 public function __construct()
    {
       // echo '::child Class initiated::';
    } 

   public function wash(){
   	//echo $this->size;
   	echo "</br>size:".$this->size;
   	echo "</br>color:".$this->color;
   	echo "</br>price:".$this->price;
   	echo "</br>weight:".$this->weight;
   }

}


?>
