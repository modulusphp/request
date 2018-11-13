<?php

namespace Modulus\Request;

use Birke\Rememberme\Cookie\PHPCookie;
use Modulus\Request\Cookies\Cookies as Base;
use Modulus\Request\Cookies\CookiesInterface;

class Cookies extends Base implements CookiesInterface
{
  /**
   * Check if cookie is present
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
   * Create a new cookie
   *
   * @return void
   */
  public function make(string $name, int $expireTime = 604800, string $path = "/", string $domain = "", bool $secure = false, bool $httpOnly = true)
  {
    return new PHPCookie($name, $expireTime, $path, $domain, $secure, $httpOnly);
  }

  /**
   * Return cookie value
   *
   * @param string $cookie
   * @return mixed
   */
  public function get(string $cookie)
  {
    return isset($this->all[$cookie]) ? $this->all[$cookie] : null;
  }

  /**
   * Get all cookies
   *
   * @return array
   */
  public function all() : array
  {
    return $this->all ?? [];
  }
}
