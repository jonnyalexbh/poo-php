<?php

namespace Jonnyalexbh\Armors;

use Jonnyalexbh\Armor;
use Jonnyalexbh\Attack;

/**
* CursedArmor implements Armor
*/
class CursedArmor implements Armor
{
  public function absorbDamage(Attack $attack)
  {
    return $attack->getDamage() * 2;
  }
}
