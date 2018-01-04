<?php
/**
* Interfaces y Polimorfismo
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
    $this->hp = $this->hp - $this->absorbDamage($damage);

    show("{$this->name} ahora tiene {$this->hp} puntos de vida");

    if ($this->hp <= 0) {
      $this->die();
    }
  }

  public function die(){
    show("{$this->name} muere");
    exit();
  }

  protected function absorbDamage($damage) {
    return $damage;
  }
}

/**
* Soldier
*/
class Soldier extends Unit {
  protected $damage = 40;
  protected $armor;

  public function __construct($name) {
    parent::__construct($name);
  }

  public function setArmor(Armor $armor = null) {
    $this->armor = $armor;
  }

  public function attack(Unit $opponent) {
    show(
      "{$this->name} ataca con la espada a {$opponent->getName()}"
    );

    $opponent->takeDamage($this->damage);
  }

  protected function absorbDamage($damage) {
    if ($this->armor) {
      $damage = $this->armor->absorbDamage($damage);
    }

    return $damage;
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
}

/**
* interface Armor
*/
interface Armor {
  public function absorbDamage($damage);
}

/**
* BronzeArmor implements Armor
*/
class BronzeArmor implements Armor {
  public function absorbDamage($damage) {
    return $damage / 2;
  }
}

/**
* SilverArmor implements Armor
*/
class SilverArmor implements Armor {
  public function absorbDamage($damage) {
    return $damage / 3;
  }
}

/**
* CursedArmor implements Armor
*/
class CursedArmor implements Armor {
  public function absorbDamage($damage) {
    return $damage * 2;
  }
}

$armor = new BronzeArmor();

$jdlopez = new Soldier('jdlopez');

$jabh = new Archer('jabh');
//$jabh->move('el norte');
$jabh->attack($jdlopez);

$jdlopez->setArmor(new CursedArmor);

$jabh->attack($jdlopez);

$jdlopez->attack($jabh);
