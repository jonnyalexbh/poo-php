<?php

namespace Jonnyalexbh;

class User extends Model
{

  public function getFirstNameAttribute($value)
  {
    return strtoupper($value);
  }
  
}
