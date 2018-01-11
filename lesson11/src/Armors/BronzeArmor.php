<?php

namespace Jonnyalexbh\Armors;

use Jonnyalexbh\Armor;
use Jonnyalexbh\Attack;

/**
* BronzeArmor extends Armor
*/
class BronzeArmor extends Armor
{
  public function absorbDamage(Attack $attack)
  {
    return $attack->getDamage() / 2;
  }
}
