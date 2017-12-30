<?php
/**
* ¿Por qué necesitamos clases y objetos?
*/

class Person {

  /**
  * propiedades
  */
  public $firstName;
  public $lastName;

  /**
  * __construct metodo magico, se ejecuta al crear una nueva instancia del objeto
  */
  public function __construct($firstName, $lastName){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  /**
  * metodos
  */
  public function fullName(){
    return $this->firstName.' '.$this->lastName;
  }

}

$person1 = new Person('Jose', 'Miguel');
$person2 = new Person('Kevin', 'Andres');

echo "{$person1->fullName()} es amigo de {$person2->fullName()}";


/*
$person1 = new Person;
$person1->firstName = 'Jose';
$person1->lastName = 'Miguel';

$person2 = new Person;
$person2->firstName = 'Kevin';
$person2->lastName = 'Andres';

echo "{$person1->fullName()} es amigo de {$person2->fullName()}";
*/


/*
$firstName = 'Jonny';
$lastName = 'Alexander';

$fullName = $firstName.' '. $lastName;

$firstName2 = 'Juan';
$lastName2 = 'David';

$fullName2 = $firstName2.' '. $lastName2;

echo "$fullName es amigo de $fullName2";
*/
