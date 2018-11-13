<?php

namespace Modulus\Request;

use Modulus\Request\Server\Server as Base;
use Modulus\Request\Server\ServerInterface;

class Server extends Base implements ServerInterface
{
  /**
   * Check if server value is present
   *
   * @param string $name
   * @return bool
   */
  public function has(string $name) : bool
  {
    if (isset($this->all[$name])) return true;
    return false;
  }

  /**
   * Get server
   *
   * @param string $server
   * @return mixed
   */
  public function get(string $server)
  {
    return isset($this->all[$server]) ? $this->all[$server] : null;
  }

  /**
   * Get all headers
   *
   * @return array
   */
  public function all() : array
  {
    return $this->all;
  }
}
