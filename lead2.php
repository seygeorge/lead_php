<?php
class ShopProduct
{
    public $title = "default product";
    public $producerMainName = "main name";
    public $produceFirstName = "firstName";
    public $price = 0;

    public function getproducer()
    {
        return $this->produceFirstName." "
            .$this->producerMainName; 
    }


}

$product1 = new Shopproduct();
$product1->title = "My Grace";
echo $product1;

?>