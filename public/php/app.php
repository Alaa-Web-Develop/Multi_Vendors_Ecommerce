<?php
namespace A;

 include __DIR__.'/A/Person.php';
 include __DIR__.'/B/Person.php';
//Cannot declare class Person, because the name is already in use

//use B\Person;
FuncTest();
use Person;
 $person = new  Person; //Class "Person" not found in F:\PHP track\PHP laravel\Store\public\php\app.php
 $person->name="Alaa Elattar";
 \B\Person::$country="Egypt";
 $person::$country="kkk";

 //var_dump($person);

 //$person = new A\Person  >>> $person = new Person =  \A\Person;

 //B\Person:want Person in B in A  \B\Person start fom root