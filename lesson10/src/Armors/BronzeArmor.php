<?php

namespace Jonnyalexbh\Armors;

use Jonnyalexbh\Armor;
use Jonnyalexbh\Attack;

/**
* BronzeArmor implements Armor
*/
class BronzeArmor implements Armor
{
  public function absorbDamage(Attack $attack)
  {
    return $attack->getDamage() / 2;
  }
}
