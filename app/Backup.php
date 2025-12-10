<?php

namespace App;

class Backup {

  private $path;

  private function __construct($path) {
    $this->path = $path;
  }
}