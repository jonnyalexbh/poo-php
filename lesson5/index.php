<?php
/**
* Interacción entre objetos
*/

function show($message) {
  echo "<p>$message</p>";
}

/**
* Unit
*/
abstract class Unit {
  protected $hp = 40;
  protected $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function getHp() {
    return $this->hp;
  }

  public function move($direction) {
    show("{$this->name} camina hacia $direction");
  }

  abstract public function attack(Unit $opponent);

  public function takeDamage($damage) {
    $this->setHp($this->hp - $damage);

    if ($this->hp <= 0) {
      $this->die();
    }
  }

  public function die() {
    show("{$this->name} muere");
  }

  private function setHp($points) {
    $this->hp = $points;

    show("{$this->name} ahora tiene {$this->hp} puntos de vida");
  }
}

/**
* Soldier
*/
class Soldier extends Unit {
  protected $damage = 40;

  public function attack(Unit $opponent) {
    show(
      "{$this->name} corta a {$opponent->getName()} en dos"
    );

    $opponent->takeDamage($this->damage);
  }

  public function takeDamage($damage) {
    return parent::takeDamage($damage / 2);
  }
}

/**
* Archer
*/
class Archer extends Unit {
  protected $damage = 20;

  public function attack(Unit $opponent) {
    show(
      "{$this->name} dispara una flecha a {$opponent->getName()}"
    );

    $opponent->takeDamage($this->damage);
  }

  public function takeDamage($damage) {
    if (rand(0, 1)) {
      return parent::takeDamage($damage);
    }
  }
}

$jdlopez = new Soldier('jdlopez');

$jabh = new Archer('jabh');
// $jabh->move('el norte');
$jabh->attack($jdlopez);

$jabh->attack($jdlopez);

$jdlopez->attack($jabh);
