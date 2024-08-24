<?php
class person{
    public $name,$age,$address;
    function __construct($name,$age,$address){
        $this->name=$name;
        $this->age=$age;
        $this->address=$address;
    }
     
    function description(){
        echo "name is {$this->name} age is {$this->age} and location is {$this->address}";
    }
}
$p=new person("nasir",29,"lakki marwat");
echo $p->description();



?>