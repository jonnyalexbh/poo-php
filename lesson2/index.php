<?php
/**
* Encapsulamiento, getters y setters en PHP
*/

class Person {
  protected $firstName; // public, protected <-> private
  protected $lastName;
  protected $nickname;
  protected $changedNickname = 0;

  public function __construct($firstName, $lastName){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function getFirstName(){
    return $this->firstName;
  }

  public function getLastName(){
    return $this->lastName;
  }

  public function setNickname($nickname) {
    if ($this->changedNickname >= 2) {
      throw new Exception(
        "You can't change a nickname more than 2 times"
      );
    }

    $this->nickname = $nickname;

    $this->changedNickname++;
  }

  public function getNickname(){
    return $this->nickname;
  }

  public function getFullName(){
    return $this->firstName . ' ' . $this->lastName;
  }
}

$person1 = new Person('Jonny', 'Alexander');

$person1->setNickname('jonnyalexbh');
$person1->setNickname('jonnyalex.bh');

exit($person1->getNickname());

echo $person1->getFullName();
