<?php

namespace Jonnyalexbh;

use Warcraft\Armor;

/**
* SilverArmor implements Armor
*/
class SilverArmor implements Armor {
  public function absorbDamage($damage) {
    return $damage / 3;
  }
}
