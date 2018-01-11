<?php

namespace Jonnyalexbh\Armors;

use Jonnyalexbh\Armor;
use Jonnyalexbh\Attack;

/**
* SilverArmor extends Armor
*/
class SilverArmor extends Armor
{
  public function absorbPhysicalDamage(Attack $attack)
  {
    return $attack->getDamage() / 3;
  }
}
