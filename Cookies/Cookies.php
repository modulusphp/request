<?php

namespace Modulus\Request\Cookies;

class Cookies
{
  /**
   * $all
   *
   * @var arrays
   */
  protected $all;

  /**
   * __construct
   *
   * @return void
   */
  public function __construct()
  {
    $this->all = $_COOKIE;

    foreach ($this->all as $key => $value) {
      if ($key !== 'all') $this->{strtolower($key)} = $value;
    }
  }
}
