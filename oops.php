<?php
abstract Class Car{
    public $brand_name;
    public $model_name;
    public $mileage;
    public $color;
    abstract public function setBrandName($brand_name);
    abstract public function setModelName($brand_name);
    abstract public function setMileageName($brand_name);
    abstract public function setColorName($brand_name);
    public function getBrandName(){
        return $this->brand_name;
    }
    public function getModelName(){
        return $this->model_name;
    }
    public function getMileageName(){
        return $this->mileage;
    }
    public function getColorName(){
        return $this->color;
    }
}
Class Tata extends Car{
    public function setBrandName($brand_name){
        $this->brand_name = $brand_name;
    }
    public function setModelName($model_name){
        $this->model_name = $model_name;
    }
    public function setMileageName($mileage){
        $this->mileage = $mileage;
    }
    public function setColorName($color){
        $this->color = $color;
    }
}
$tata = New Tata();
$tata->setBrandName("Tata");
$tata->setModelName("Nano");
echo "Brand Name = ".$tata->getBrandName()."</br>";
echo "Model Name = ".$tata->getModelName();


?>