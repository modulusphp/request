<?php

namespace Modulus\Request\Server;

interface ServerInterface
{
  /**
   * Check if server value is present
   *
   * @param string $name
   * @return bool
   */
  public function has(string $name) : bool;

  /**
   * Get server
   *
   * @param string $server
   * @return mixed
   */
  public function get(string $server);

  /**
   * Get all headers
   *
   * @return array
   */
  public function all() : array;
}
