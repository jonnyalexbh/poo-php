<?php

namespace Jonnyalexbh\Armors;

use Jonnyalexbh\Armor;
use Jonnyalexbh\Attack;

/**
* SilverArmor implements Armor
*/
class SilverArmor implements Armor
{
  public function absorbDamage(Attack $attack)
  {
    if ($attack->isPhysical()) {
      return $attack->getDamage() / 3;
    }
    return $attack->getDamage();
  }
}
