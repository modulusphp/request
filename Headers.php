<?php

namespace Modulus\Request;

use Modulus\Support\Extendable;
use Modulus\Request\Headers\Headers as Base;
use Modulus\Request\Headers\HeadersInterface;

class Headers extends Base implements HeadersInterface
{
  use Extendable;

  /**
   * Check if header is present
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
   * Add header
   *
   * @return Headers
   */
  public function add(string $name, string $value) : Headers
  {
    header("{$name}: {$value}");
    return $this;
  }

  /**
   * Add headers
   *
   * @param array $headers
   * @return Headers
   */
  public function addMany(array $headers) : Headers
  {
    foreach ($headers as $name => $value) {
      header("{$name}: {$value}");
    }

    return $this;
  }

  /**
   * Get header
   *
   * @param string $header
   * @return mixed
   */
  public function get(string $header)
  {
    return isset($this->all[$header]) ? $this->all[$header] : null;
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
