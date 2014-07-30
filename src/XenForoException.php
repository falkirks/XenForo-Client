<?php
define("FORUM_NOT_FOUND", 0);
define("AUTH_ERROR", 1);
class XenForoException extends Exception {
  private $c;
    function __construct($cause) {
      $this->c = $cause;
    }
    public function getCause(){
      return $this->c;
    }
}
