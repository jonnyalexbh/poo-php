<?php

namespace Jonnyalexbh\Armors;

use Jonnyalexbh\Armor;
use Jonnyalexbh\Attack;

/**
* MissingArmor extends Armor
*/
class MissingArmor extends Armor
{
  public function absorbDamage(Attack $attack)
  {
    return $attack->getDamage();
  }
}
