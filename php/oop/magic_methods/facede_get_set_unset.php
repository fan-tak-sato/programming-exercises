<?php

class Dynamic {
  static protected $methods = array();
  private $message = 'Hello World';

  public static function registerMethod($method) {
    self::$methods[] = $method;
  }

  private function __call($method, $args) {
    if (in_array($method, self::$methods)) {
      $obj = new DynamicFacade($this);
      $fields = array();
      foreach (array_keys(get_class_vars(__CLASS__)) as $field) {
        if ($field != 'methods') {
          $fields[$field] = &$this->$field;
        }
      }
      $obj->registerFields($fields);
      array_unshift($args, $obj);
      return call_user_func_array($method, $args);
    }
  }
}

class DynamicFacade {

  private $object = NULL;
  private $fields = array();
  private $arrays = array();

  function __construct($obj) {
    $this->object = $obj;
  }

  private function __get($var) {
    if (in_array($var, array_keys($this->fields))) {
      return $this->fields[$var];
    }
    else {
      return $this->object->$var;
    }
  }

  private function __set($var, $val) {
    if (in_array($var, array_keys($this->fields))) {
      $this->fields[$var] = $val;
    }
    else {
      $this->$object->$var = $val;
    }
  }

  private function __isset($var) {
    if (in_array($var, array_keys($this->fields))) {
      return TRUE;
    }
    return isset($this->object->$var);
  }

  private function __unset($var) {
    unset($this->object->$var);
    unset($this->fields[$var]);
  }

  public function registerFields(&$fields) {
    $this->fields = $fields;
  }

  function __call($method, $args) {
    return call_user_func_array(array($this->object, $method), $args);
  }
}

function test($obj) {
  print $obj->message . PHP_EOL;
}

Dynamic::registerMethod('test');
$d = new Dynamic();
$d->test();

