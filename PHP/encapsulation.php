<?php  
class product  {  
	public $Product;  
	public $basePrice;

	function __construct($p, $b){  
		$this->Product  = $p;  
		$this->basePrice= $b;  
	}  
	public function setGst($gst){  
		$this->gst=$gst; 
	}   
	public function display(){  
		echo $this->Product." Price Without GST Is " .$this->basePrice.' Rs/'. '<br>';  
		return $this->basePrice + $this->gst;  
   	}    
}  


   
$product=new product("Rice",22);    
$product->setGst(20);  
echo " Rs/ ". $product->display(). "with GST ";  
   
?>
