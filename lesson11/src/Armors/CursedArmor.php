<?php

namespace Jonnyalexbh\Armors;

use Jonnyalexbh\Armor;
use Jonnyalexbh\Attack;

/**
* CursedArmor extends Armor
*/
class CursedArmor extends Armor
{
  public function absorbDamage(Attack $Attack)
  {
    return $attack->getDamage() * 2;
  }
}
