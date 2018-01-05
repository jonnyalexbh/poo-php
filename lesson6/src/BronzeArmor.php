<?php

namespace Jonnyalexbh;

use Warcraft\Armor;

/**
* BronzeArmor implements Armor
*/
class BronzeArmor implements Armor {
  public function absorbDamage($damage) {
    return $damage / 2;
  }
}
