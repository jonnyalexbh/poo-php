<?php

namespace Jonnyalexbh\Weapons;

use Jonnyalexbh\Weapon;
use Jonnyalexbh\Unit;

class BasicSword extends Weapon
{
  protected $damage = 40;

  public function getDescription(Unit $attacker, Unit $opponent)
  {
    return "{$attacker->getName()} ataca con la espada a {$opponent->getName()}";
  }

}
