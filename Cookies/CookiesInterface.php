<?php

namespace Modulus\Request\Cookies;

interface CookiesInterface
{
  /**
   * Check if cookie is present
   *
   * @param string $name
   * @return bool
   */
  public function has(string $name) : bool;

  /**
   * Create a new cookie
   *
   * @return void
   */
  public function make(string $name, int $expireTime = 604800, string $path = "/", string $domain = "", bool $secure = false, bool $httpOnly = true);

  /**
   * Return cookie value
   *
   * @param string $cookie
   * @return mixed
   */
  public function get(string $cookie);

  /**
   * Get all cookies
   *
   * @return array
   */
  public function all() : array;
}
