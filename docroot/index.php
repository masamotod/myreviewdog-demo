<?php

class MyController {

  public function index() {
    $str = 'rin';

    echo $str;
  }

}

$c = new MyController();
$c->index();
