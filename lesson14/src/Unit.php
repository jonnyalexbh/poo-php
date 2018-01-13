<?php

namespace Jonnyalexbh;

/**
* Unit
*/
class Unit
{
  protected $hp = 40;
  protected $name;
  protected $weapon;
  protected $armor;

  public function __construct($name, Weapon $weapon)
  {
    $this->name = $name;
    $this->weapon = $weapon;
    $this->armor = new Armors\MissingArmor();
  }

  public static function createSoldier()
  {
    $soldier = new Unit('jdlopez', new Weapons\BasicSword);
    $soldier->setArmor(new Armors\BronzeArmor());

    return $soldier;
  }

  public function setWeapon(Weapon $weapon)
  {
    $this->weapon = $weapon;

    return $this;
  }

  public function setArmor(Armor $armor = null)
  {
    $this->armor = $armor;

    return $this;
  }

  public function setShield()
  {
    return $this;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getHp()
  {
    return $this->hp;
  }

  public function move($direction)
  {
    Log::info("{$this->name} camina hacia $direction");
  }

  public function attack(Unit $opponent)
  {
    $attack = $this->weapon->createAttack();

    Log::info($attack->getDescription($this, $opponent));

    $opponent->takeDamage($attack);
  }

  public function takeDamage(Attack $attack)
  {
    $this->hp = $this->hp - $this->armor->absorbDamage($attack);

    Log::info("{$this->name} ahora tiene {$this->hp} puntos de vida");

    if ($this->hp <= 0) {
      $this->die();
    }
  }

  public function die()
  {
    Log::info("{$this->name} muere");

    exit();
  }
}
