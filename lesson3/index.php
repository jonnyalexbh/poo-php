<?php
/**
* Herencia y abstracción con PHP
*/

/**
* Unit
*/
abstract class Unit {
  protected $alive = true;
  protected $name;

  public function __construct($name){
    $this->name = $name;
  }

  public function move($direction){
    echo "<p>{$this->name} camina hacia $direction</p>";
  }

  abstract public function attack($opponent);

}

/**
* Soldier
*/
class Soldier extends Unit {

  public function attack($opponent){
    echo "<p>{$this->name} corta a $opponent en dos</p>";
  }

}

/**
* Archer
*/
class Archer extends Unit {

  public function attack($opponent){
    echo "<p>{$this->name} dispara una flecha a $opponent</p>";
  }

}

$jabh = new Archer('jonnyalex.bh');
$jabh->move('el norte');
$jabh->attack('jdlopez');
