<?php

namespace Jonnyalexbh\Armors;

use Jonnyalexbh\Armor;

/**
* BronzeArmor implements Armor
*/
class BronzeArmor implements Armor {
  public function absorbDamage($damage) {
    return $damage / 2;
  }
}
