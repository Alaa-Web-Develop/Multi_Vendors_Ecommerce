<?php
//namespace A;

const test = "test";
 function FuncTest(){
    echo "FuncTest";
}
class Person{
    const MALE='m';

    public $name = "Alaa"; // initial value
    protected $gender;
    private $age;

    public static $country;

    public function __construct()
    {
        echo __CLASS__; 
    }
    public function setAge($age){
        $this->age=$age;
        return $this; //chaining return object
    }
    public function setGender($gender){
$this->gender=$gender;
return $this;
    }
}