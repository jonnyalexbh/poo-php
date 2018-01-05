<?php

namespace Jonnyalexbh;

use Warcraft\Armor;

/**
* CursedArmor implements Armor
*/
class CursedArmor implements Armor {
  public function absorbDamage($damage) {
    return $damage * 2;
  }
}
