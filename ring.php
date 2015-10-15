<?php


include_once('jewelry.php');

class Ring extends jewelry{
	
	public $size = '3mm';
	public $color = 'whitegold';
	public $price = '600';
	public $weight = '5g';

	 public function __construct()
    {
       // echo '::child Class initiated::';
    } 

   public function wash(){
   	
   	echo "</br>size:".$this->size;
   	echo "</br>color:".$this->color;
   	echo "</br>price:".$this->price;
   	echo "</br>weight:".$this->weight;
   }
}

?>
