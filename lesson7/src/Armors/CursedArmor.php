<?php

namespace Jonnyalexbh\Armors;

use Jonnyalexbh\Armor;

/**
* CursedArmor implements Armor
*/
class CursedArmor implements Armor {
  public function absorbDamage($damage) {
    return $damage * 2;
  }
}
