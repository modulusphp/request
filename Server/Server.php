<?php

namespace Modulus\Request\Server;

class Server
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
    $this->all = $_SERVER;
  }
}
