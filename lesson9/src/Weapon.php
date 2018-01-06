<?php

namespace Jonnyalexbh;

/**
* Weapon
*/
abstract class Weapon
{
  protected $damage = 0;

  public function getDamage()
  {
    return $this->damage;
  }

  abstract public function getDescription(Unit $attacker, Unit $opponent);

}
