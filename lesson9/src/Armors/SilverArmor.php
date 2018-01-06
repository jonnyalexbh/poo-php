<?php

namespace Jonnyalexbh\Armors;

use Jonnyalexbh\Armor;

/**
* SilverArmor implements Armor
*/
class SilverArmor implements Armor {
  public function absorbDamage($damage) {
    return $damage / 3;
  }
}
