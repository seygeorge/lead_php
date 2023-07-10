<?php
//The car class.
class Car{
public $color;
public $model;
public function __construct($color,$model){
    $this->color = $color;
    $this->model = $model;

}
    public function message() {
        return "My car is a " . $this->color." ". $this->model."!";

    }

}
//The owner class.
class owner{
    public $name_owner;
    public $Gender_owner;
    public $town_owner;

    public function __construct($name_owner,$Gender_owner,$town_owner){
        $this-> name_owner = $name_owner;
        $this-> Gender_owner = $Gender_owner;
        $this-> town_owner = $town_owner;
    }

    public function news(){
        return "The owner is:".$this->name_owner."<br>".
            "Is a : ".$this->Gender_owner."<br>".
            "is line: ".$this->town_owner;

    }

}


class shopProduct{
    public $title ="default product";
    public $productMainName = "main name";
    public $price =0;

}




$myCar = new Car("black","volvo");
echo $myCar -> message()."<br>"; 
echo strrev($myCar -> message());
echo "<br>";

$myOwner = new owner("george","male","tarkwa");
echo $myOwner -> news();
echo "<br>";


$shop = new shopProduct();
echo $shop -> title = "My Antonia <br>";
echo $shop -> productMainName."<br>";
echo $shop -> price;
?>