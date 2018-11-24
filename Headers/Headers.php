<?php

namespace Modulus\Request\Headers;

class Headers
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
    $this->all = getallheaders();

    foreach ($this->all as $key => $value) {
      if ($key !== 'all') $this->{strtolower($key)} = $value;
    }
  }
}
