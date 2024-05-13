<?php
namespace B;

const test = "test";
 function FuncTest(){
    echo "FuncTest";
}

//use A\Person; error
//use A\Person as PersonA; //alias

//class Person extends \A\Person = class Person extends PersonA{

class Person {
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