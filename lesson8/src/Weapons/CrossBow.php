<?php

namespace Jonnyalexbh\Weapons;

use Jonnyalexbh\Weapon;
use Jonnyalexbh\Unit;

class CrossBow extends Bow
{
  protected $damage = 40;

  public function getDescription(Unit $attacker, Unit $opponent)
  {
    return "{$attacker->getName()} dispara una flecha {$opponent->getName()}";
  }
}
