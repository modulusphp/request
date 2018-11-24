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

    foreach ($this->all as $key => $value) {
      if ($key !== 'all') $this->{strtolower($key)} = $value;
    }
  }
}
