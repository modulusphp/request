<?php

namespace Modulus\Request\Headers;

use Modulus\Request\Headers;

interface HeadersInterface
{
  /**
   * Check if header is present
   *
   * @param string $name
   * @return bool
   */
  public function has(string $name) : bool;

  /**
   * Add header
   *
   * @return Headers
   */
  public function add(string $name, string $value) : Headers;

  /**
   * Add headers
   *
   * @param array $headers
   * @return Headers
   */
  public function addMany(array $headers) : Headers;

  /**
   * Get header
   *
   * @param string $header
   * @return mixed
   */
  public function get(string $header);

  /**
   * Get all headers
   *
   * @return array
   */
  public function all() : array;
}
