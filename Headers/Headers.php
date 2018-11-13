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
  }
}
